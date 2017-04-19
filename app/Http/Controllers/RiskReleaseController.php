<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RiskRelease;

/**
 * 
 * @resource RiskReleaseController
 * Se encarga de realizar las operaciones relacionadas
 * a RiskRelease.
 */
class RiskReleaseController extends Controller
{
    /**
     * Muestra los RiskRelease registrados.
     * GET /riskrelease/
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riskreleases = RiskRelease::all();
        return \View::make('risks.index')
        ->with('riskreleases', $riskreleases);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return \View::make('risks.create');
    }


    /**
     * 
     * Guarda un RiskRelease nuevo en la base de datos.
     * POST /riskrelease/
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
    RiskRelease::create([
        'description' => $data['description'],
        'init_date' => $data['init_date'],
        'end_date' => $data['end_date'],
        'user_id' => $data['user_id'],
    ]);
    return \Redirect::to('risks');
    }

    /**
     * 
     * Muestra un RiskRelease en base al id si es que existe.
     * GET /riskrelease/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $riskrelease = RiskRelease::findOrFail($id);
        return \View::make('risks.show')->with('riskrelease', $riskrelease);
    }

    /**
     * 
     * Actualia el Riskrelease especificado.
     * PUT /riskrelease/{id}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $riskrelease = RiskRelease::findOrFail($id);
        return \View::make('risks.edit')->with('riskrelease', $riskrelease);
    }
    

    /**
     * 
     * Elimina el RiskRelease con el id especificado de la base de datos.
     * DELETE /riskrelease/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $riskrelease = RiskRelease::findOrFail($id);
        $riskrelease->delete();
        \Session::flash('message', 'Se ha eliminado exitosamente.');
        return \Redirect::to('risks');
    }
}

