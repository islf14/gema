<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_act = DB::table('tb_registro')->count();
        $count_equ = DB::table('tb_equipo')->count();
        $count_users = DB::table('users')->count();
        $count_depen = DB::table('tb_dependencia')->count();
        return view('principal',compact('count_act','count_equ','count_users','count_depen'));
    }

    public function count(){
        $count_act = DB::table('tb_registro')->count();
        
        dd($count_act);
        return "count";
    }
}
