<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

/**
 * 
 * @resource SupplierController
 * Se encarga de realizar las operaciones relacionadas
 * a Supplier.
 */

class SupplierController extends Controller
{
    /**
     * Obtiene los Supplier registrados.
     * GET /supplier/
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Supplier::all();
    }

    /**
     * 
     * Guarda un Supplier nuevo en la base de datos.
     * POST /supplier/
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
            'name'      => 'required',
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
 
            Supplier::create($request->all());
            return ['created' => true];
        } catch (Exception $e) {
            \Log::info('Error creating supplier: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * Muestra un Supplier en base al id si es que existe.
     * GET /supplier/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Supplier::findOrFail($id);
    }

    /**
     * 
     * Actualiza el Supplier especificado.
     * PUT /supplier/{id}
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
            'name'    => 'required',
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
        
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        return ['updated' => true];
            
            }catch (Exception $e) {
            \Log::info('Error updating the requested supplier: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }
    

    /**
     * 
     * Elimina el Supplier especificado de la base de datos.
     * DELETE /supplier/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Reglas de Validacion
        $rules = [
            'id'  => 'required|exist:suppliers,id'
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
        
        Supplier::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected supplier: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }
}
