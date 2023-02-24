<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DevAdmin extends Controller
{

    public function previlege($p){
        $auth = Auth::guard('admin')->user();
        $previlege = explode(",",$auth->previlege);
        if(!in_array($p, $previlege)){ return false; }
        return true;
    }
    
    public function index(){
        if(!$this->previlege(6)){
            return redirect('/dev/home')->with("info","Anda tidak punya akses");
        }
        $meta = Meta::$data_meta;
        $meta['title'] = 'Admin | Pengaturan Admin';
        return view('admin.admin',[
            "meta" => $meta,
            "admins" => Admin::all(),
        ]);
    }

    public function postHandler(Request $request){
        $this->previlege(6);
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/dev/admin')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/dev/admin')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/dev/admin')->with($res['status'],$res['message']);
            // return redirect('/dashboard/user')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/dev/admin')->with("info","Submit not found");
        }
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
            'previlege'=>'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['previlege'] = implode(",",$validatedData['previlege']);
        //dd($validatedData);

        // Check Username
        if(!Admin::whereUsername($request->username)->first()){
            // Create new user
            Admin::create($validatedData);
            return ['status'=>'success','message'=>'Admin berhasil ditambahkan'];
        }else{
            return ['status'=>'error','message'=>'Username telah terpakai'];
        }
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'name'=>'required',
            'username' => 'required',
            'status' => 'required',
            'previlege'=>'required',
        ]);
        $validatedData['previlege'] = implode(",",$validatedData['previlege']);

        $admin = Admin::find($request->id);
        $oldUsername = $admin->username;
        $newUsername = $request->username;
        
        //Check if password empty
        if(!$request->password){
            $validatedData['password'] = $admin->password;
        }else{
            $validatedData['password'] = Hash::make($request->password);
        }
        
        //Check if the admin is found
        if($admin){
            //Check username
            if($newUsername!=$oldUsername){
                if(Admin::whereUsername($request->username)->first()){
                    return ['status'=>'error','message'=>'Username telah terpakai'];
                }
            }
            // Update admin
            $admin->update($validatedData);   
            return ['status'=>'success','message'=>'Admin berhasil diedit']; 
        }else{
            return ['status'=>'error','message'=>'Admin tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $admin = Admin::find($request->id);

        //Check if the admin is found
        if($admin){
            Admin::destroy($request->id);    // Delete admin
            return ['status'=>'success','message'=>'Admin berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Admin tidak ditemukan'];
        }
    }
}
