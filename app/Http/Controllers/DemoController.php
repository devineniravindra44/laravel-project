<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo($id){
        return "The id is ".$id ;
    }
}
