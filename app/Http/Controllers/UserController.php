<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

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
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $hasroles = $user->getRoleNames();

        $userdata[0] = $user->name;
        $userdata[1] = $user->lastname;
        $userdata[2] = $user->dni;
        $userdata[3] = $user->phone;
        $userdata[4] = $user->email;

        $makeroles = array();        
        foreach($hasroles as $rol){
            $makeroles[] = $rol;
        }

        $datos[0]=$userdata;
        $datos[1]=$makeroles;

        $jsonstring = json_encode($datos);
        return $jsonstring;//okok
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
        return view('users.edit', compact('user','roles','hasroles','makeroles'));//okok
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
        $user = User::find($id);
        $datos["name"] = $request->name;
        $datos["lastname"] = $request->lastname;
        $datos["dni"] = $request->dni;
        $datos["phone"] = $request->phone;
        if($request->password != null){
            $datos['password'] = Hash::make($request->password);
        }
        $user->update($datos);//actualiza datos
        $user->syncRoles($request->roles);//asigna nuevos roles
        return redirect()->route('users.index');//okok
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
        return "eliminado";//okok
    }

    public function listusers(){
        $users = User::all();
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
        return $jsonstring;//okok
    }
}
