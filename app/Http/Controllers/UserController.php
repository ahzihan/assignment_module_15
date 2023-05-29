<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create($validatedData);

        return back()->with('success', 'User created successfully.');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
