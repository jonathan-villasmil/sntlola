<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index()
    {
        Gate::authorize('haveaccess', 'roles.index');
        $role = Role::with('permissions')->paginate();
        //$role = Role::orderBy('id', 'Desc')->paginate(10);
    
        return view('admin/roles.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'roles.create');

        $permissions = Permission::get();

        $role = new Role();

        return view('admin/roles.create', compact('permissions', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess', 'roles.create');
        //dd($request->all());
        $request->validate([
            'name'=> 'required|max:50|unique:roles,name',
            'description'=>'required|max:50',
            'full-access' => 'required|in:yes,no'
        ]);

        $role = Role::create($request->all());
        
        //if($request->get('permission')){
            //return $request->all();
            $role->permissions()->sync($request->get('permission'));
        //}
        /*else{
            return 'No existe';
        }*/

        return redirect()->route('roles.index')->with('status', 'Role Created!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        Gate::authorize('haveaccess', 'roles.show');
        //$this->authorize('haveaccess', 'roles.show');
        $permission_role =[];

        foreach($role->permissions as $permission){
            $permission_role[] = $permission->id;
        }

        $permissions = Permission::get();

        return view('admin/roles.show', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        Gate::authorize('haveaccess', 'roles.edit');
        //$this->authorize('haveaccess', 'roles.edit');
        $permission_role =[];

        foreach($role->permissions as $permission){
            $permission_role[] = $permission->id;
        }

        $permissions = Permission::get();

        return view('admin/roles.edit', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //Gate::authorize('haveaccess', 'roles.edit');
        //$this->authorize('haveaccess', 'roles.edit');
        $request->validate([
            'name'=> 'required|max:50|unique:roles,name,'.$role->id,
            'description'=>'required|max:50',
            'full-access' => 'required|in:yes,no'
        ]);

        $role->update($request->all());

        //if($request->get('permission')){
            //return $request->all();
            $role->permissions()->sync($request->get('permission'));
        //}
        /*else{
            return 'No existe';
        }*/

        return redirect()->route('roles.index')->with('status', 'Role Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Gate::authorize('haveaccess', 'roles.destroy');
        $this->authorize('haveaccess', 'roles.destroy');
        
        $role->delete();

        return redirect()->route('roles.index')->with('status', 'Role Successfully Removed!');
    }
}
