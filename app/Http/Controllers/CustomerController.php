<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

use App\Supplier;

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
       $customers = Customer::all();
       return \View::make('customers.index')
       ->with('customers', $customers);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
          $suppliers = Supplier::all();
          return \View::make('customers.create')
            ->with('suppliers', $suppliers);
    }

    /**
     * Guarda un Costumer nuevo en la base de datos.
     * POST /customer/
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      var_dump($data);
      Customer::create([
          'name' => $data['name'],
          'supplier_id'=>$data['supplier_id'],
      ]);
      return \Redirect::to('customers');
    }

    /**
     * Muestra un Customer por id.
     * GET /customer/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id)->with('supplier')->get()->first();
        return \View::make('customers.show')
        ->with('customer', $customer);
    }

  /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $suppliers = Supplier::all();
        $customer = Customer::findOrFail($id)->with('supplier')->get()->first();
        return \View::make('customers.edit')
        ->with('customer', $customer)
        ->with('suppliers',$suppliers);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
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
        $customer = Customer::findOrFail($id);
        $customer->delete();
        \Session::flash('message', 'Se ha eliminado exitosamente.');
        return \Redirect::to('customers');
    }
}
