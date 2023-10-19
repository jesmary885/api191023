<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
  
    public function show(User $user)
    {
        return User::find($user);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return ['message' => 'User deleted!'];
    }
}
