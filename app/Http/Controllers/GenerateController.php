<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function generate(){
        User::query()->delete();

        $users = User::factory(10)->create();

        return $users;
    }
}
