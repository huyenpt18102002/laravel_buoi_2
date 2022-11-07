<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function  viewAllProduct(){
        return view ('index');
    }
    public function  viewProductById($id){
        return view ('detail');
    }
}
