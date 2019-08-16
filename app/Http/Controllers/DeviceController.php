<?php

namespace App\Http\Controllers;

use DB;
use App\Device;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class DeviceController extends Controller
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
        $tipoequipo = DB::table('tb_tipoequipo')->get();
        $estado = DB::table('tb_estado')->get();
        $marca = DB::table('tb_marca')->get();
        $dependencia = DB::table('tb_dependencia')->get();
        $procesador = DB::table('tb_procesador')->get();
        $so = DB::table('tb_so')->get();

        $fecha = Carbon::now();
        // dd($fecha);
        return view('equipo.create', compact('tipoequipo','estado','marca','dependencia','procesador','so','fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Device::create($request->all());
        } catch (QueryException $e) {
            return redirect()->route('device.index')->with('info', 'Error: No se pudo registrar.');
        }
        return redirect()->route('device.index');
        // dd($query);
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

        $equipo = DB::connection('mysql')->table('tb_equipo')
            ->join('tb_tipoequipo', 'tb_equipo.idTipoEquipo', '=', 'tb_tipoequipo.idTipoEquipo')
            ->join('tb_dependencia', 'tb_equipo.idDependencia', '=', 'tb_dependencia.idDependencia')
            ->join('tb_estado', 'tb_equipo.idEstado', '=', 'tb_estado.idEstado')
            ->join('tb_marca', 'tb_equipo.idMarca', '=', 'tb_marca.idMarca')
            ->select('tb_equipo.codigo_pat',
            'tb_equipo.modelo',
            'tb_tipoequipo.nomTipoE',
            'tb_dependencia.nomDependencia',
            'tb_estado.nomEstado',
            'tb_marca.nomMarca')
            ->get();
        
        // $itemDtable = array();
        // foreach ($equipo as $key => $item) {
        //     $itemDtable[$key]['codigo_pat']=$item->codigo_pat;
        //     $itemDtable[$key]['nomTipoE']=$item->nomTipoE;
        //     $itemDtable[$key]['nomDependencia']=$item->nomDependencia;
        //     $itemDtable[$key]['nomEstado']=$item->nomEstado;
        //     $itemDtable[$key]['nomMarca']=$item->nomMarca;
        // }
        // dd($itemDtable);
        return datatables()->of($equipo)->toJson();
    }
}
