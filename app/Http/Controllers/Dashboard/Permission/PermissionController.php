<?php

namespace App\Http\Controllers\Dashboard\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Permission as Permissions;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $permissions = Permissions::paginate();
        return  view('dashboard.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return  view('dashboard.permission.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Permissions $permission)
    {
        return  view('dashboard.permission.show');
    }


    public function edit(Permissions $permission)
    {
        return  view('dashboard.permission.edit');
    }


    public function update(Request $request, Permissions $permission)
    {
        //
    }


    public function destroy(Permissions $permission)
    {
        $permission->deleteOrFail();
        $permission->syncPermissions();
        return  redirect()->back();
    }
}
