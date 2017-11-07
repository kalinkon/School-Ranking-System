<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaShowController extends Controller
{
    public function index(){
    	$areas=Area::all();
    	return view('area.index',compact('areas'));
    }

    public function show($id){
    	$area = Area::find($id);
    	return view('area.show',compact('area'));
    }
}