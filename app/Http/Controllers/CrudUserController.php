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
    

    /**
     * User submit form login
     */
    

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
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        
        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'required|min:6'
        ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       //$user->password = $input['password'];
       $user->password = bcrypt($input['password']);
       $user->save();
        
        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * List of users
     */


    /**
     * Sign out
     */
    
}