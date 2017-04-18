<?php

namespace App\Http\Controllers;

use App\Concession;
use App\Customer;
use App\PartNumber;
use App\RiskRelease;

use Illuminate\Http\Request;
/**
 * 
 * @author Mariana Garcia
 * @resource Concession
 * Se encarga de realizar las operaciones relacionadas
 * a Concession.
 */

class ConcessionController extends Controller
{
    /**
     * Obtiene todas las Concession reistradas.
     * GET /concession/
     * @return \Illuminate\Http\Response Lista de objetos JSON.
     */
    public function index()
    {
        ini_set('memory_limit', '512M');
        ini_set('max_execution_time', 300);
        $concessions = Concession::all();
          return \View::make('concessions.index')
        ->with('concessions', $concessions);
   }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $riskreleases = RiskRelease::all(); 
        $partnumbers = PartNumber::all();
        $customers = Customer::all();

          return \View::make('concessions.index')
        ->with('riskreleases', $riskreleases)
        ->with('partnumbers', $partnumbers)
        ->with('customers', $customers);
    }


    /**
     * Guarda una Concession nueva en la base de datos.
     * POST /concession/
     * @param  \Illuminate\Http\Request  $request La informacion en objeto JSON de la Concession a guardar.
     * @return \Illuminate\Http\Response Respuesta del servicio. True si fue exitoso o false si fallo.
     */
    public function store(Request $request)
    {
              $data = $request->all();
        Concession::create([
        'name' => $data['name'],
        'model' => $data['model'],
        'description' => $data['description'],
        'status' => $data['status'],
        'work_purchase_order' => $data['work_purchase_order'],
        'riskrelease_id' => $data['riskrelease_id'],
        'partnumber_id' => $data['partnumber_id'],
        'customer_id' => $data['customer_id'],
    ]);
    return \Redirect::to('concessions'); 
        
    }

    /**
     * 
     * Muestra la Concession con el id especificado si existe.
     * GET /concession/{id}
     * @param  int  $id El id de la Concession a buscar.
     * @return \Illuminate\Http\Response Objeto JSON con la informacion de la Concession.
     */
    public function show(Request $request, $id)
    {
       ini_set('memory_limit', '256M');
       ini_set('max_execution_time', 300);
       $concession = Concession::findOrFail($id);
       return \View::make('concessions.index')->with('concession',$concession);
    }

    /**
     *
     * Muestra Concession en base al id de PartNumber.
     * GET /concession/partnumber/{id}
     * @param  int  $partnumber_id El id del PartNumber.
     * @return \Illuminate\Http\Response Lista de Concession en base al id de PartNumber.
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
     * 
     * Actualiza una Concession.
     * PUT /concession/{id}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id El id de la Concession a actualizar.
     * @return \Illuminate\Http\Response La Concession en objeto JSON.
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
            \Log::info('Error actualizando la Concession especificada: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }

    /**
     * 
     * Elimina la Concesión especificada de la base de datos.
     * DELETE /concession/{id}
     * @param  int  $id El id de la Concession a eliminar.
     * @return \Illuminate\Http\Response Respuesta de la peticion true si fue exitosa y false en caso contrario.
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
            \Log::info('Error tratando de eliminar la Concession especificada: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }


}
