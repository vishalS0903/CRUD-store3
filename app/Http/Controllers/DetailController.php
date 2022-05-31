<?php

namespace App\Http\Controllers;
use App\Models\details;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function store (Request $request){
        $product= new Details();
        $product-> name=$request->name;
        $product-> email=$request->email;
        $product-> adhar=$request->adhar;
        $product-> mobile=$request->mobile;
        $product-> pwd=$request->pwd;
        $product-> taxt=$request->taxt;
        $product-> save();


    }
}
