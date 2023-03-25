<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Admin;
use App\Models\Card;
use App\Models\Content;
use App\Models\EicCategory;
use App\Models\Faq;
use App\Models\Master;
use App\Models\Sponsor;
use Exception;
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

  public function Card(Card $card){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$card);
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
    try{
      $validatedData = $request->validate([
        'id'=>'required|numeric',
        'status'=>'required',
      ]);
      
      $master = Master::find($request->id);
      
      //Check if master data is found
      if($master){
        //Check if user is authorized
        if($this->previlege(6)){
          $master->update($validatedData);
          return ApiFormatter::createApi(200,"Success",$master);
        }else{
          return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
        }
      }else{
        return ApiFormatter::createApi(404,"Data tidak ditemukan");
      }
    }catch(Exception $error){
      return ApiFormatter::createApi(400,"Failed!");
    }  
  }

  public function Sponsor(Sponsor $sponsor){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$sponsor);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }

  public function EicCategory(EicCategory $eicc){   
    if($this->previlege(6)){
      return ApiFormatter::createApi(200,"Success",$eicc);
    }else{
      return ApiFormatter::createApi(401,"Anda tidak memiliki akses");
    }
  }
  
}
