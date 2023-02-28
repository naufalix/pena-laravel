<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Admin;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
  public function previlege($p){
    $auth = Auth::guard('admin')->user();
    $previlege = explode(",",$auth->previlege);
    if(!in_array($p, $previlege)){ return false; }
    return true;
  }

  public function Admin(Admin $admin){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$admin);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }

  public function Content(Content $content){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$content);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }

  public function Faq(Faq $faq){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$faq);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }

  public function Master(Master $master){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$master);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }

  public function MasterPost(Request $request){
        
    $validatedData = $request->validate([
        'id'=>'required|numeric',
        'status'=>'required',
    ]);
    
    $master = Master::find($request->id);

    //Check if the master is found
    if($master){
        $master->update($validatedData);
        return ['status'=>'success','message'=>'Data master berhasil diedit']; 
    }else{
        return ['status'=>'error','message'=>'Data master tidak ditemukan'];
    }
}
  
}
