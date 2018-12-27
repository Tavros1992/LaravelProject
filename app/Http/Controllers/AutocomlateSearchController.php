<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AutocomlateSearchController extends Controller
{
    function index(){
    	return view('autocomlate');
    }

    function fetch(Request $request){

        if($request->ajax()){
        $query=$request->get('query');
     $data =DB::table('geoname')->where('name','like','%'.$query.'%')->get()->toArray();
     
     return $data;
        }
    }
    function cordinant(Request $request){
        
            $id = $request->get('id');
            $data = DB::table('geoname')->where('geonameid', $id)->get();
            Session::put('data', $data);
            return $data;
    }
    
    function map(){

        return view('map');


    }
}
