<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Customer::all();
    }


    /**
     * Store a newly created resource in storage.
     *
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return Customer::findOrFail($id);
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
     * Remove the specified resource from storage.
     *
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
