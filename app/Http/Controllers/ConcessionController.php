<?php

namespace App\Http\Controllers;

use App\Concession;

use Illuminate\Http\Request;

class ConcessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Concession::all();
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
    public function show($id)
    {
        return Concession::findOrFail($id);
    }

    /**
     * Display the specified resource with the partnumber_id.
     *
     * @param  int  $partnumber_id
     * @return \Illuminate\Http\Response
     */
    public function getByPartNumber($id)
    {
        
    return Concession::where('partnumber_id','=', $id)->get();
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
        $concession = Concession::findOrFail($id);
        $concession->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Concession::destroy($id);
        return ['deleted' => true];
    }


}
