<?php

namespace App\Http\Controllers;

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
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:225',
            'is_admin' => 'boolean'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['is_admin'] = $request->has('is_admin') ? 1 : 0;

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'Create user successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', [
            'users' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'users' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'nullable|min:6|max:225',
            'is_admin' => 'boolean'
        ];
        if ($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:225|unique:users,username' . $user->id;
        }
        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users,email' . $user->id;
        }

        $validateData = $request->validate($rules);

        if ($request->filled('password')) {
            $validateData['password'] = bcrypt($validateData['password']);
        } else {
            unset($validateData['password']); // Jangan ubah password jika tidak ada input baru
        }

        $validateData['is_admin'] = $request->has('is_admin') ? 1 : 0;

        User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/users')->with('success', 'Update user successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}
