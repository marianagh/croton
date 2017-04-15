<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartNumber;

/**
 * 
 * @resource PartNumberController
 * Se encarga de realizar las operaciones relacionadas
 * a PartNumber.
 */

class PartNumberController extends Controller
{
    /**
     * Muestra la lista de PartNumber registrados.
     * GET /partnumber/
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $parts = PartNumber::all();
         return \View::make('parts.index')
            ->with('parts', $parts);
    }
/**
     * Guarda un PartNumber nuevo en la base de datos.
     * POST /partnumber/
     * @param  Illuminate\Http\Request $request
     * @return PartNumber
     */
    public function store(Request $request)
    {   
        $data = $request->all();
    PartNumber::create([
        'name' => $data['name'],
        'description' => $data['description'],
    ]);
    return \Redirect::to('parts');
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return \View::make('parts.create');
    }

    /**
     * Muestra un PartNumber pr ID.
     * GET /partnumber/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $part = PartNumber::findOrFail($id);
        return \View::make('parts.show')
            ->with('part', $part);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $part= PartNumber::findOrFail($id);
        return \View::make('parts.edit')
            ->with('part', $part);
    }

    /**
     * Actualiza el PartNumber en la base de datos.
     * PUT /partnumber/{id}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }
        
        //Reglas de Validacion
        $rules = [
            'name'  => 'required',
            'description' => 'required'
        ];
        
         try {
        //Se ejecuta el validador
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return [
                'updated' => false,
                'errors' => $validator->errors()->all()
            ];
        }
        
        $partnumber = PartNumber::findOrFail($id);
        $partnumber->update($request->all());
        return ['updated' => true];
             
            }catch (Exception $e) {
            \Log::info('Error updating the  PartNumber: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }
    

    /**
     * Elimina el PartNumber con el id especificado de la base de datos.
     * DELETE /partnumber/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnumber = PartNumber::findOrFail($id);
        $partnumber->delete();
        \Session::flash('message', 'Se ha eliminado el partnumber');
        return \Redirect::to('parts');
    }
    /**
     * Muestra el PartNumber por nombre.
     * GET /partnumber/name/{name}
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function getByName( $name){
        
         return PartNumber::where('name','=', $name)->get();
            
           }
}
