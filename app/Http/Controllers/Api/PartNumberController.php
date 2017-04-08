<?php

namespace App\Http\Api\Controllers;

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
        return PartNumber::all();
    }

    /**
     * Guarda un PartNumber nuevo en la base de datos.
     * POST /partnumber/
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }
        
        //Reglas de Validacion
        $rules = [
            'name'    => 'required',
            'description' => 'required'
        ];
        
        try {
        //Se ejecuta el validador
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return [
                'created' => false,
                'errors' => $validator->errors()->all()
                ];
            
        }
        
        PartNumber::create($request->all());
        return ['created' => true];
        
        }catch (Exception $e) {
            \Log::info('Error creating PartNumber: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * Muestra un PartNumber pr ID.
     * GET /partnumber/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return PartNumber::findOrFail($id);
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
    public function destroy(Request $request, $id)
    {
        //Reglas de Validacion
        $rules = [
            'id'  => 'required|exist:partnumbers,id'
        ];
        
        try {
        //Se ejecuta el validador
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return [
                'deleted' => false,
                'errors' => $validator->errors()->all()
            ];
        }
        
        
        PartNumber::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected PartNumber: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
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
