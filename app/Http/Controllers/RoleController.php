<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roles.index');
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
        Role::create(['name' => $request->name]);
        return "guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $getpermissions = $role->getPermissionNames();

        $roledata[0] = $role->name;
        $roledata[1] = $role->guard_name;

        $haspermissions = array();        
        foreach($getpermissions as $permission){
            $haspermissions[] = $permission;
        }

        $datos[0]=$roledata;
        $datos[1]=$haspermissions;

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
        $role = Role::find($id);
        $permissions = Permission::get();
        $getpermissions = $role->getPermissionNames();
        $haspermissions = array();        
        foreach($getpermissions as $permission){
            $haspermissions[] = $permission;
        }
        return view('roles.edit', compact('role','permissions','haspermissions'));
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
        $role = Role::find($id);
        $datos["name"] = $request->name;
        $role->update($datos);//actualiza datos
        $role->syncPermissions($request->permissions);//asigna nuevos permisos
        return redirect()->route('roles.index');//okok
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->delete();
        return "eliminado";
    }
    
    public function listroles(){
        $roles = Role::all();
        $itemDtable = array();
        foreach ($roles as $key => $item) {
            $itemDtable[$key]['id']=$item->id;
            $itemDtable[$key]['name']=$item->name;
        }
        // dd($itemDtable);
        $jsonstring = json_encode($itemDtable);
        return $jsonstring;//okok
    }
}
