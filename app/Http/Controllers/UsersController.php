<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // le request sert à récupérer des informations.
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email:rfc,dns',
            'password' => 'string|min:8',
        ]);

        return view('store');
    }
}
