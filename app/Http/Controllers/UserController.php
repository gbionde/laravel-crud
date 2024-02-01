<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:level')->only('edit');
    }

    public function index()
    {
        return view('users.index', [
            'users' => DB::table('users')->orderBy('level')->orderBy('name')->paginate('5'),
            // 'users' => User::all(),
        ]);
    }

    public function edit($id)
    {
        return view('users.edit', [
            'user' => User::findOrFail($id)
        ]);
    }


    public function update(Request $id)
    {
        // Try to find a user by its $id
        // If found, update it calling the all() method.
        User::findOrFail($id -> id)->update($id->all());
        return redirect()->route('user.index');
    }
}
