<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report_solicitation;
use App\Models\Sanitary_region;


class Report_solicitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_solicitations = Report_solicitation::where('validated','TRUE')->get();
        
        $provinces = [
            'Buenos Aires' => 'Buenos Aires',
            'La Pampa' => 'La Pampa',
            'Misiones' => 'Misiones',
            'Formosa' => 'Formosa',
            'Entre Rios' => 'Entre Rios',
            'Chaco' => 'Chaco',
            'Salta' => 'Salta',
            'Tucuman' => 'Tucuman',
            'Santiago del Estero' => 'Santiago del Estero',
            'Mendoza' => 'Mendoza',
            'San Luiz' => 'San Luiz',
            'San Juan' => 'San Juan',
            'Tierra del Fuego' => 'Tierra del Fuego',
            'Santa Cruz' => 'Santa Cruz',
            'Chubut' => 'Chubut',
            'Cordoba' => 'Cordoba',
            'Santa Fe' => 'Santa Fe',
            'Rio Negro' => 'Rio Negro',
            'Neuquen' => 'Neuquen',
            'Corrientes' => 'Corrientes',
            'La Rioja' => 'La Rioja',
            'Catamarca' => 'Catamarca',
        ];


        $vaccinations_or_vaccines = [
            'vaccination' => 'vaccination',
            'vaccine' => 'vaccine'
        ];

        return view('report_solicitations.index', compact('report_solicitations','provinces','vaccinations_or_vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'province' => 'required|string',
            'sanitary_region' => 'required|string',
            'vaccinations_or_vaccines' => 'required|string'
        ]);

        Report_solicitation::create($request->all());

        return redirect()->route('report_solicitations.index')->with('info','The report solicitation has been created');

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
