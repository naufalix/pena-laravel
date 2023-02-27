<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Faq;
use Illuminate\Http\Request;

class DevFaq extends Controller
{
    public function index(){
        $meta = Meta::$data_meta;
        $meta['title'] = "Admin | Faq";
        return view('admin.faq',[
            "meta" => $meta,
            "faqs" => Faq::all(),
        ]);
    }

    public function postHandler(Request $request){
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/dev/faq')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/dev/faq')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/dev/faq')->with($res['status'],$res['message']);
            //return redirect('/dev/faq')->with("info","Fitur hapus sementara dinonaktifkan");
        }
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);

        Faq::create($validatedData);
        return ['status'=>'success','message'=>'FAQ berhasil ditambahkan'];
    }

    public function update(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'question'=>'required',
            'answer'=>'required',
            'show'=>'required|numeric',
            'sort'=>'required',
        ]);
        
        $faq = Faq::find($request->id);

        //Check if the faq is found
        if($faq){
            $faq->update($validatedData);
            return ['status'=>'success','message'=>'FAQ berhasil diedit']; 
        }else{
            return ['status'=>'error','message'=>'FAQ tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $faq = Faq::find($request->id);

        //Check if the faq is found
        if($faq){
            Faq::destroy($request->id);
            return ['status'=>'success','message'=>'FAQ berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'FAQ tidak ditemukan'];
        }
    }

}
