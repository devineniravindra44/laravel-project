<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $arr = array(1,2,3,4,5,6,7,8,9,11,12);
        $arr1 = array(11,12,13,14,15,16,17);
        return view('home',['arrays'=>$arr,'arrays1'=>$arr1]);
    }
    
    public function about(){
        return view('about');
    }
}
