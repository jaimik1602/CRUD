<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('user'), $imageName);
        $user = new Product;
        $user->image = $imageName;
        $user->name = $request->name;
        $user->description = $request->address;
        $user->save();
        // return back()->withSuccess('User Created!!!!!');
    }
}
