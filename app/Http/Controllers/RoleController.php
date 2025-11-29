<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');

        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $roleRequest)
    {
        $data=$roleRequest->validated();
        $data['slug']= str()->slug($data['name']);
        Role::create($data);
        return redirect()->route('roles.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $roleRequest, Role $role)
    {
        $data=$roleRequest->validated();
        $role->update($data);
        return redirect()->route('roles.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
        //
    }
}
