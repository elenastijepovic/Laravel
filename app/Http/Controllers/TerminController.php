<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\trener;
use App\Models\termin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerminController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=termin::join('treners','termins.trener_id','=','treners.id')
        ->get(['termins.*','treners.ime','treners.prezime']);
        
         return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $termin=new termin();
        $termin->dan=$request->dan;
        $termin->vreme=$request->vreme;
	$termin->broj=$request->broj;
        $termin->trener_id=$request->trener_id;
        $termin->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	
        $termin = termin::find($id);
        $termin->delete();
    }
}
