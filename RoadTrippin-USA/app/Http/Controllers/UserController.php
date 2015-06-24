<?php 
namespace App\Http\Controllers;

use App\User;
use Auth;

class UserController extends Controller {

    /**********************************************
        Uses Laravel's built in Registering 
        to create new users
    **********************************************/

    public function create() {
        return view('auth/register');
    }

    /**********************************************
        Posts the created user to the database 
        and encrypts their code with Laravel's 
        built in system
    **********************************************/

    public function postCreate() {
        return redirect('home');    
    }

    /**********************************************
        Allows for editing of Users
    **********************************************/

    public function edit($user_id) {
        $user = new User($user_id);
        return view('edit_user');
    }

    /**********************************************
        Saves the edits to the database. 
        CANNOT yet edit passwords.
    **********************************************/

    public function postEdit($user_id) {
        $user = new User($user_id);
        $user->first_name = Request::input('first_name');
        $user->last_name = Request::input('last_name');
        $user->username = Request::input('username');
        $user->email = Request::input('email');
        $user->password = Request::input('password');
        $user->save();
        return redirect('user');
    }

    /**********************************************
        Uses Laravel's built in login 
        functionality to get Users logged in
    **********************************************/

    public function login() {
        return view('auth/login');
    }

    /**********************************************
        Logs users out of our application with
        Laravel's built in system
    **********************************************/

    public function logout() {
        Auth::logout();
        return redirect('auth/login');
    }

    /**********************************************
        Shows the User Profile page
    **********************************************/

    public function view() {
        if (!Auth::check()) {
            return redirect('auth/login');
        } 
        $user = Auth::user();
        return view('/user', ['user' => $user]);
        
    }

}