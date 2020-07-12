<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administracija;
class AdministracijaController extends Controller
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
        $administracijas=Administracija::all();
        return view('administracijas.create', compact('administracijas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$validatedData = $request->validate(['ime' => 'required']);
//$this ->validate($request,['title'=>'required']);

     $administracija = new Administracija;
     $administracija->ime=$request->input('ime');
     $administracija->save();
     return redirect('/administracijas/create')->with('success', 'Contact saved!');
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
      $administracija = Administracija::find($id);
      $administracija->delete();

      return redirect('/administracijas/create')->with('success', 'Contact deleted!');
    }
}
