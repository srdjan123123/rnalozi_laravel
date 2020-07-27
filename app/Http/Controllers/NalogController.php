<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nalog;
use App\Administracija;
use App\Kupac;
use App\Operater;
use App\Status;
class NalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $nalogs=Nalog::all();
      $administracijas=Administracija::all();
      $kupacs=Kupac::all();
      $operaters=Operater::all();
      $statuses=Status::all();
      $nalozi = Status::find(3)->nalogs;
      //$flight = Nalog::where('status', 3)->where('operater',2)->get();
      $flight = Nalog::where('status', 2)->get();
      $flight = $flight->where('operater', 1);
      $flight = $flight->where('kupac', 2);
      //$nalozi=$nalogg->nalogs();
      return view('nalogs.create', compact('nalogs','administracijas', 'kupacs', 'operaters', 'statuses','nalozi','flight'));
      //return view('nalogs.create')->with('nalozi',$nalogg->nalogs());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate(['administracija' => 'required', 'kupac' => 'required','operater' => 'required','status' => 'required']);
      //$this ->validate($request,['title'=>'required']);

/*$a= $request->input('status');
echo $a;*/
           $nalog = new Nalog;
           $nalog->administracija=$request->input('administracija');
           $nalog->kupac=$request->input('kupac');
           $nalog->operater=$request->input('operater');
           $nalog->status=$request->input('status');
           $nalog->save();

           return redirect('/nalogs/create')->with('success', 'Contact saved!');

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
      $nalog = Nalog::find($id);
      $nalog->delete();

      return redirect('/nalogs/create')->with('success', 'Contact deleted!');

    }
}