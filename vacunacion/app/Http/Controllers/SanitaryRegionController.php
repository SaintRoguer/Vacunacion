<?php

namespace App\Http\Controllers;

use App\Models\Sanitary_region;
use Illuminate\Http\Request;

class SanitaryRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanitary_regions = Sanitary_region::paginate();
        return view('sanitary_regions.index', compact('sanitary_regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = [
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

        return view('sanitary_regions.create', compact('province'));
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
            'name' => 'required|unique:sanitary_regions,name',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'province' => 'required|string'
        ]);

        $sanitary_region = Sanitary_region::create($request->all());

        return redirect()->route('sanitary_regions.index')->with('info', 'The sanitary region has been created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanitary_region  $sanitary_region
     * @return \Illuminate\Http\Response
     */
    public function show(Sanitary_region $sanitary_region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sanitary_region  $sanitary_region
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanitary_region $sanitary_region)
    {
        $province = [
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

        return view('sanitary_regions.edit', compact('sanitary_region','province'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sanitary_region  $sanitary_region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanitary_region $sanitary_region)
    {
        $request->validate([
            'name' => 'required|unique:sanitary_regions,name',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'province' => 'required|string'
        ]);

        $sanitary_region->update($request->all());

        return redirect()->route('sanitary_regions.index')->with('info', 'The sanitary region has been modified successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanitary_region  $sanitary_region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanitary_region $sanitary_region)
    {
        $sanitary_region->delete();
        return redirect()->route('sanitary_regions.index')->with('info', 'The sanitary region has been deleted successfully');
    }
}
