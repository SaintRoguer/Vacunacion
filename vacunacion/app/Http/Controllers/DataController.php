<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function getProvinces()
    {
        $provinces = DB::table('provinces')->pluck("name","id");
        return view('dropdown',compact('provinces'));
    }

    public function getCities($id) 
    {
        $cities = DB::table("cities")->where("provinces_id",$id)->pluck("name","id");
        return json_encode($cities);
    }

}
