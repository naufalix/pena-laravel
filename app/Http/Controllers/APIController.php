<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
    if($this->previlege(6)){return $admin;}
    return "Anda tidak memiliki akses";
  }
  
}
