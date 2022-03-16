<?php

namespace App\Http\Controllers\Dashboard\Role;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $roles = Role::paginate();
        return view('dashboard.role.index', compact('roles'));
    }

    public function create()
    {
        return view('dashboard.role.create');
    }


    public function store(Request $request)
    {

    }


    public function show(Role $role)
    {
        return view('dashboard.role.show', compact('role'));
    }


    public function edit(Role $role)
    {
        return view('dashboard.role.edit', compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        //
    }


    public function destroy(Role $role)
    {
        $role->deleteOrFail();
        return redirect()->back();

    }
}
