<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanitary_region;

class DropdownController extends Controller
{
    
    public function findSanitary_regionName(Request $request){
        $data = Sanitary_region::select('name')->where('province',$request->id)->get();
        //console.log($request->id);
        return response()->json($data);

    }
}
