<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Meta;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function meta(){
        $meta = Meta::$data_meta;
        $meta['title'] = 'Pekan Elektromedik Nasional';
        $meta['description'] = 'PENA atau Pekan Elektromedik Nasional merupakan agenda tahunan Himpunan Mahasiswa Teknik Elektromedik seIndonesia (HIMATEMI) dimana didalamnya terdapat dua kegiatan inti yaitu Electromedical Innovation Competition (EIC) dan Seminar Nasional (SEMNAS).';
        return $meta;
    }

    public function index(){
        return view('home',[
            "meta" => $this->meta(),
            "contents" => Content::all(),
            "faqs" => Faq::whereShow(1)->orderBy("sort")->get(),
            "sponsors" => Sponsor::orderBy("sort")->get(),
        ]);
    }
}
