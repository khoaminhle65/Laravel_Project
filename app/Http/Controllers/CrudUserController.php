<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    /**
     * Login page
     */
    public function login()
    {
        return view('crud_user.login');
    }
<<<<<<< HEAD
=======

>>>>>>> origin/main

    /**
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    /**
     * Registration page
     */


    /**
     * User submit form register
     */
   

    /**
     * View user detail page
     */

    /**
     * Delete user by id
     */

    /**
     * Form update user page
     */


    /**
     * Submit form update user
     */
   

    /**
     * List of users
     */
    public function listUser()
    {
        if(Auth::check()){
            $users = User::paginate(2);
            //$users = User::all();
            return view('crud_user.list', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    } 

    /**
     * Sign out
     */

}