<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.user.index', compact('users'));
    }


    public function create()
    {
        $user = new User();
        return $this->edit($user);
    }

    public function store(Request $request)
    {

    }

    public function show(User $user)
    {

    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {

    }


    public function destroy(User $user)
    {
        $user->deleteOrFail();
        return redirect()->back();
    }
}
