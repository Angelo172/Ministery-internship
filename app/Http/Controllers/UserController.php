<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {   
        $roles=Role::get();
        return view('users.show', compact('user','roles'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $userRequest, User $user)
    {
        $data=$userRequest->validated();
        if ($userRequest->has('roles')) {
        $user->roles()->sync($userRequest->roles);
    } else {
        $user->roles()->sync([]); // si aucun rôle sélectionné → retire tous
    }
        return redirect()->route('users.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
        //
    }
}
