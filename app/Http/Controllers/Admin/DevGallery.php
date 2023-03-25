<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DevGallery extends Controller
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
        $meta['title'] = 'Admin | Gallery';
        return view('admin.gallery',[
            "meta" => $meta,
            "galleries" => Gallery::all(),
        ]);
    }

    public function postHandler(Request $request){
        $this->previlege(6);
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/dev/gallery')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/dev/gallery')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/dev/gallery')->with($res['status'],$res['message']);
            // return redirect('/dev/gallery')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/dev/gallery')->with("info","Submit not found");
        }
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'sort' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image'] = time().".png";
            $request->file('image')->move(public_path('assets/img/gallery'), $validatedData['image']);
            Gallery::create($validatedData);
            return ['status'=>'success','message'=>'Image added successfully']; 
        }
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'name' => 'required',
            'type' => 'required',
            'sort' => 'required',
        ]);
        
        $gallery = Gallery::find($request->id);

        //Check if gallery is found
        if($gallery){
            
            //Check if has image
            if($request->file('image')){
                
                // Delete old image
                $img_path = public_path().'/assets/img/gallery/'.$gallery->image;
                unlink($img_path);         // Delete image
                
                // Upload new image
                $validatedData['image'] = time().".png";
                $request->file('image')->move(public_path('assets/img/gallery'), $validatedData['image']);
                $gallery->update($validatedData);
                return ['status'=>'success','message'=>'Image updated successfully']; 
            }else{
                $gallery->update($validatedData);
                return ['status'=>'success','message'=>'Image updated successfully']; 
            }
        }else{
            return ['status'=>'error','message'=>'Image not found'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $gallery = Gallery::find($request->id);

        //Check if the gallery is found
        if($gallery){
            // Delete image
            $img_path = public_path().'/assets/img/gallery/'.$gallery->image;
            unlink($img_path);         // Delete image
            // Delete gallery
            Gallery::destroy($request->id);    // Delete gallery
            return ['status'=>'success','message'=>'Image deleted successfully'];
        }else{
            return ['status'=>'error','message'=>'Image not found'];
        }
    }
}
