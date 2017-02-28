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
    public function index()
    {
        PartNumber::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PartNumber::create($request->all());
        return ['created' => true];
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
        $partnumber = PartNumber::findOrFail($id);
        $partnumber->update($request->all());
        return ['updated' => true];
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
        PartNumber::destroy($id);
        return ['deleted' => true];
    }
    /**
     * Display the partnumber with the name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function getByName($name){

         return PartNumber::where('name','=', $name)->get();
    }
}
