<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    //
    public function list_contact(Request $request){
        $keyword = $request->get('q');
        if(empty($keyword)){
            $contacts = DB::select("SELECT*FROM contact");
        }else{
            $contacts = DB::select("SELECT*FROM contact WHERE name LIKE '%$keyword%' OR phone LIKE '%$keyword%'");
        }

        return view('contact', ['contacts'=>$contacts]);
}
}
