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
        return RiskRelease::with('user')->get();
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
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

         // Creamos las reglas de validación
        $rules = [
            'description'      => 'required',
            'user_id' => 'required|exist:users,id',
            'init_date' => 'required',
            'end_date' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
            ];

       try {
            // Ejecutamos el validador y en caso de que falle devolvemos la respuesta
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return [
                    'created' => false,
                    'errors'  => $validator->errors()->all()
                ];
            }
 
            RiskRelease::create($request->all());
            return ['created' => true];
        } catch (Exception $e) {
            \Log::info('Error creating risk release: '.$e);
            return \Response::json(['created' => false], 500);
        }
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
       return RiskRelease::findOrFail($id)->with('user')->get()->first();
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
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }
        
                //Reglas de Validacion
        $rules = [
            'description'      => 'required',
            'user_id' => 'required|exist:users,id',
            'init_date' => 'required',
            'end_date' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
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
        
        $riskrelease = RiskRelease::findOrFail($id);
        $riskrelease->update($request->all());
        return ['updated' => true];
            
            }catch (Exception $e) {
            \Log::info('Error updating the requested risk release: '.$e);
            return \Response::json(['updated' => false], 500);
        }
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
        //Reglas de Validacion
        $rules = [
            'id'  => 'required|exist:riskreleases,id'
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
        
        RiskRelease::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected risk release: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }
}
