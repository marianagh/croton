<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

/**
 * 
 * @resource UserController
 * Se encarga de realizar las operaciones relacionadas
 * a User.
 */

class UserController extends Controller
{
   
    /**
     * Obtiene los User registrados.
     * GET /user/
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return User::all();
    }

    /**
     *
     * Guarda un User nuevo en la base de datos.
     * POST /user/
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
            'name'      => 'required'
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
 
            User::create($request->all());
            return ['created' => true];
        } catch (Exception $e) {
            \Log::info('Error creating user: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * 
     * Muestra un User en base al id especificado.
     * GET /user/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return User::findOrFail($id);
    
    }

    /**
     * 
     * Actualiza un User especificado.
     * PUT /user/{id}
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
            'name'    => 'required'
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
        
        $user = User::findOrFail($id);
        $user->update($request->all());
        return ['updated' => true];
            
            }catch (Exception $e) {
            \Log::info('Error updating the requested user: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }

    /**
     * 
     * Elimina un User especificado de la base de datos.
     * DELETE /user/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //Reglas de Validacion
        $rules = [
            'id'  => 'required|exist:users,id'
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
        
        User::destroy($id);
        return ['deleted' => true];
            
            }catch (Exception $e) {
            \Log::info('Error deleting the selected user: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }
}
