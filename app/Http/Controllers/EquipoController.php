<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('equipo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function listarequipos(){

        $transporte = DB::table('tb_transporte')
            ->join('tb_persona', 'tb_transporte.idpropietario', '=', 'tb_persona.id')
            ->join('tb_vehiculo', 'tb_transporte.idvehiculo', '=', 'tb_vehiculo.id')
            ->join('tb_asociacion', 'tb_transporte.idasociacion', '=', 'tb_asociacion.id')
            ->select('tb_persona.PERnombres','tb_persona.PERapellidos','tb_persona.PERDNI','tb_persona.PERtelefono', 'tb_vehiculo.VEHplaca', 'tb_transporte.TRAtarjunicirculacion', 'tb_asociacion.ASOnombre', 'tb_transporte.id')
            ->get();
        
        $TRADtable = array();
        foreach ($transporte as $key => $TRA) {
            $TRADtable[$key]['id']=$TRA->id;
            $TRADtable[$key]['nrocirculacion']=$TRA->TRAtarjunicirculacion;
            $TRADtable[$key]['dni']=$TRA->PERDNI;
            $TRADtable[$key]['nomape']=$TRA->PERapellidos.', '.$TRA->PERnombres;
            $TRADtable[$key]['placa']=$TRA->VEHplaca;
            $TRADtable[$key]['telefono']=$TRA->PERtelefono;
            $TRADtable[$key]['asociacion']=$TRA->ASOnombre;
        }
        return datatables()->of($TRADtable)->toJson();


    }
}
