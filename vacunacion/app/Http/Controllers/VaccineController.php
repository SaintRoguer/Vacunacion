<?php

namespace App\Http\Controllers;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccine::paginate();
        return view('vaccines.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $laboratory = [
            'Sputnik' => 'Sputnik',
            'Pfizer' => 'Pfizer',
            'Moderna' => 'Moderna',
            'Sinopharm' => 'Sinopharm'
        ];
        return view('vaccines.create',compact('laboratory'));
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
            'name' => 'required',
            'laboratory' => 'required',
            'date_of_caducity' => 'required|date',
            'number_of_doses' => 'required|integer',
            'days_between_doses' => 'required|integer'
        ]);

        $vaccine = Vaccine::create($request->all());

        return redirect()->route('vaccines.index')->with('info', 'The vaccine has been created successfully');
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
    public function edit(Vaccine $vaccine)
    {
        $laboratory = [
            'Sputnik' => 'Sputnik',
            'Pfizer' => 'Pfizer',
            'Moderna' => 'Moderna',
            'Sinopharm' => 'Sinopharm'
        ];

        return view('vaccines.edit', compact('vaccine','laboratory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccine $vaccine)
    {
        $request->validate([
            'name' => 'required',
            'laboratory' => 'required',
            'date_of_caducity' => 'required|date',
            'number_of_doses' => 'required|integer',
            'days_between_doses' => 'required|integer'
        ]);

        $vaccine->update($request->all());

        return redirect()->route('vaccines.index')->with('info', 'The vaccine has been modified successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('vaccines.index')->with('info', 'The vaccine has been deleted successfully');
    }
}
