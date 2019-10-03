<?php

namespace App\Http\Controllers;

use DB;
use App\Activity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = DB::connection('mysql')->table('tb_registro as tr')
            ->join('tb_equipo as te', 'te.id', '=', 'tr.idEquipo')
            ->join('users as u','u.id','=','tr.user_id')
            ->select('tr.id',
            'tr.problema',
            'tr.solucion',
            'tr.fecha',
            'tr.tipoMant',
            'te.codigo_pat',
            'u.name')
            ->get();
            // dd($registro);
        return view('actividad.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo = DB::table('tb_equipo')->get();
        $fecha = Carbon::now();
        // dd($equipo);
        return view('actividad.create',compact('equipo','fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        try {
            Activity::create($request->all());
        } catch (QueryException $e) {
            return redirect()->route('activity.index')->with('info', 'Error: No se pudo registrar.');
        }
        return redirect()->route('activity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = DB::connection('mysql')->table('tb_registro as tr')
            ->join('tb_equipo as te', 'te.id', '=', 'tr.idEquipo')
            ->join('users as u','u.id','=','tr.user_id')
            ->select('tr.id',
            'tr.problema',
            'tr.problema_real',
            'tr.solucion',
            'tr.fecha',
            'tr.tipoMant',
            'tr.recomendaciones',
            'tr.idEquipo',
            'te.codigo_pat',
            'u.name')
            ->where('tr.id','=',"$id")
            ->get();
            // dd($registro);
        return view('actividad.show',compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = DB::connection('mysql')->table('tb_registro as tr')
            ->join('tb_equipo as te', 'te.id', '=', 'tr.idEquipo')
            ->join('users as u','u.id','=','tr.user_id')
            ->select('tr.id',
            'tr.problema',
            'tr.problema_real',
            'tr.solucion',
            'tr.fecha',
            'tr.tipoMant',
            'tr.recomendaciones',
            'tr.idEquipo',
            'te.codigo_pat',
            'u.id AS idUser',
            'u.name')
            ->where('tr.id','=',"$id")
            ->get();
            // dd($registro);
        return view('actividad.edit',compact('registro'));
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
        Activity::find($id)->update($request->all());
        return redirect()->route('activity.index'); //->with('info', 'Éxito: Actualizado correctamente.');
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
}
