<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;

use App\Customer;
/**
 * 
 * @resource CustomerController
 * Se encarga de realizar las operaciones relacionadas
 * a Customer.
 */

class CustomerController extends Controller
{
    /**
     * Obtiene todos los Customer registrados.
     * GET /customer/
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Customer::with('supplier')->get();
    }


    /**
     * Guarda un Costumer nuevo en la base de datos.
     * POST /customer/
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
            'supplier_id' => 'required|exist:suppliers,id',
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
 
            Customer::create($request->all());
            return ['created' => true];
        } catch (Exception $e) {
            \Log::info('Error creating customer: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * Muestra un Customer por id.
     * GET /customer/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Customer::findOrFail($id)->with('supplier')->get()->first();
    }

    /**
     * 
     * Actualiza el Customer especificado en la base de datos.
     * PUT /customer/{id}
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
            'name'      => 'required',
            'supplier_id' => 'required|exist:suppliers,id',
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
        
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return ['updated' => true];
            
            }catch (Exception $e) {
            \Log::info('Error updating the requested customer: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }

    /**
     * 
     * Elimina el Customer especificado de la base de datos.
     * DELETE /customer/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Reglas de Validacion
        $rules = [
            'id'  => 'required|exist:customers,id'
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
        
        Customer::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected customer: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }
}
