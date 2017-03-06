<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartNumber;

class PartNumberController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return PartNumber::all();
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return PartNumber::findOrFail($id);
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
     * Remove the specified resource from storage.
     *
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
     * Display the partnumber with the name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function getByName( $name){
        
         return PartNumber::where('name','=', $name)->get();
            
           }
}
