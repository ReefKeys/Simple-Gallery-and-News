<?php

namespace App\Http\Controllers;

use App\Models\gallery_model;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    public function index(){

        $data = gallery_model::limit(4)->get();

        return view ('main',compact('data'));
    }
}
