<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('haveaccess','user.index');
        $users = User::with('roles')->orderBy('id', 'Desc')->paginate(20);
        //$roles = Role::orderBy('id', 'Desc')->paginate(10);
        //dd($users);
        //return $users;
        return view('admin/users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('haveaccess','user.create');
        $roles  = Role::all();
        $user = new User;
        //$user->roles()->assignRole("invitado"); // asignar role a usuario, y en el formulario seleccionar por defecto Invitado
       
        //dd($roles);
        
        //$roles = Role::orderBy('id', 'desc')->get();
        //dd($roles);
        return view('admin/users.create', compact('roles', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUsersRequest $request, Role $roles)
    {
        // $validated = $request->validated();
        // try {
        //     $user = new User;
        //     $user->name = $validated['name'];
        //     $user->email = $validated['email'];
        //     $user->password = bcrypt($validated['password']);
        //     $user->save();
        //     $user->roles()->sync($validated['role']);
        //     return redirect()->route('users.index')->with('status', 'User Created!');
        // } catch (\Throwable $th) {
        //     throw $th;
        //     return redirect()->route('users.index')->with('status', 'Oops! An error has occurred.');
        // }
        $user = $request->validated();
        $user['password'] = bcrypt($request->password);
        $user['roles'] = $request->input('roles');
        $user = User::create($user);
        $user->roles()->sync($request->input('roles'));
        //dd($user);
        
        return redirect()->route('users.index')->with('status', 'User Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$this->authorize('haveaccess','user.show');
        $roles = Role::orderBy('name')->get();
        return view('admin/users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$this->authorize('haveaccess','user.edit');

        $roles = Role::orderBy('name')->get();

        return view('admin/users.edit', compact( 'roles', 'user'));
        //return view('admin/users.edit', ['users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, User $user)
    {
        $this->authorize('haveaccess','user.update');

        $user->update($request->validated());

        if($request->filled('password')){
            $request->merge(['password' => bcrypt($request->password)]);
        }
        unset($request['id']);

		if (!$request->password) {
	        unset($request['password']);
		}
        unset($request['password_confirmation']);

        $user->roles()->sync($request->get('roles'));

        session()->flash('status', 'User Updated!');

        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index')->with('status', 'Usuario borrado!');
    }
}
