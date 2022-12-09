<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $users = User::select("*")->paginate(10);

        return view('index', compact('users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return back();
    }
}
