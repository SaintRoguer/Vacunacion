<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine_lot;
use App\Models\Vaccine;
use App\Models\Sanitary_region;


class Vaccine_lotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lots = Vaccine_lot::paginate();

        return view('vaccine_lots.index', compact('lots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccines = Vaccine::all()->pluck('name','name');
        $sanitary_region = Sanitary_region::all()->pluck('name','name');

        return view('vaccine_lots.create', compact('vaccines','sanitary_region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lot_number' => 'required|integer',
            'vaccine' => 'required|string',
            'ammount_of_vaccines' => 'required|integer',
            'date_of_caducity' => 'required|date',
            'sanitary_region' => 'required|string',
        ]);

        $Vaccine_lot = Vaccine_lot::create($request->all());

        return redirect()->route('vaccine_lots.index')->with('info', 'The vaccine lot has been created successfully');    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
