<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = DB::table('users')

        // $users = DB::table('users')
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%'.$name.'%' );
        })->paginate(10);
        return view ('pages.users.index', compact('users'));
    }

    public function create()
    {
        return view ('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create
        (
            [
                'name'=>$request['name'],
                'email'=>$request['email'],
                'roles'=>$request['roles'],
                'phone'=>$request['phone'],
                'address'=>$request['address'],
                'password'=>Hash::make($request['password'] )
            ]
        );

        return redirect(route('user.index'))->with('success', 'New User Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
