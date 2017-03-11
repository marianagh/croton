<?php

namespace App\Http\Controllers;

use App\Concession;
use App\PartNumber;
use App\Customer;

use Illuminate\Http\Request;

class ConcessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        ini_set('memory_limit', '512M');
        ini_set('max_execution_time', 300);
        return Concession::with('riskrelease')
       ->with('customer')
       ->with('partnumber')
       ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Concession::create($request->all());
        return ['created' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 300);
       return Concession::findOrFail($id)
       ->with('riskrelease')
       ->with('customer')
       ->with('partnumber')
       ->get()->first();
    }

    /**
     * Display the specified resource with the partnumber_id.
     *
     * @param  int  $partnumber_id
     * @return \Illuminate\Http\Response
     */
    public function getByPartNumber(Request $request, $id)
    {
        
        ini_set('memory_limit', '512M');
        ini_set('max_execution_time', 300);
        return Concession::where('partnumber_id','=', $id)
        ->with('riskrelease')
        ->with('customer')
        ->with('partnumber')
        ->get();
            
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
            'model'    => 'required',
            'description' => 'required',
            'status'    => 'required',
            'quantity'  => 'required',
            'riskrelease_id'    => 'required|exist:riskreleases,id',
            'partnumber_id' => 'required|exist:partnumbers,id',
            'customer_id'   => 'required|exist:customers,id'
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
        
        $concession = Concession::findOrFail($id);
        $concession->update($request->all());
        return ['updated' => true];
            
            }catch (Exception $e) {
            \Log::info('Error updating the requested concession: '.$e);
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
            'id'  => 'required|exist:concessions,id'
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
        
        Concession::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected concession: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }


}
