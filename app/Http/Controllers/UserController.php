<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.index');
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
        //
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
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
        return("en show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $hasroles = $user->getRoleNames();
        $roles = Role::get();
        $makeroles = array();        
        foreach($hasroles as $rol){
            $makeroles[] = $rol;
        }
        // dd($makeroles);
        return view('users.edit', compact('user','roles','hasroles','makeroles'));
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
       
        dd($request);
        //User::find($id)->update($request->all());
         return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return "eliminado";
        
    }

    public function listusers(){
        // return "hola";
        $users = User::all();
        
        // return $users;
        $itemDtable = array();
        foreach ($users as $key => $item) {
            $itemDtable[$key]['id']=$item->id;
            $itemDtable[$key]['name']=$item->name;
            $itemDtable[$key]['last_name']=$item->last_name;
            $itemDtable[$key]['email']=$item->email;
            $itemDtable[$key]['dni']=$item->dni;
        }
        // dd($itemDtable);
        // return datatables()->of($itemDtable)->toJson();
        $jsonstring = json_encode($itemDtable);
        return $jsonstring;
    }
}
