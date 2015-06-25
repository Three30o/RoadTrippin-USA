<?php 
namespace App\Http\Controllers;

use App\User;
use Auth;

class UserController extends Controller {

    // LARAVELS BUILT IN SYSTEM TO REGISTER NEW USERS
    public function create() {
        return view('auth/register');
    }

    // LARAVELS BUILT IN SYSTEM TO LOGIN USERS
    public function login() {
        return view('auth/login');
    }

    // LARAVELS BUILT IN SYSTEM TO LOGOUT USERS
    public function logout() {
        Auth::logout();
        return redirect('auth/login');
    }

    // LARAVELS BUILT IN SYSTEM TO POST CREATED USER AND ENCRYPTS THE CODE
    public function postCreate() {
        return redirect('home');    
    }

    // USER PROFILE PAGE
    public function view() {
        if (!Auth::check()) {
            return redirect('auth/login');
        } 
        $user = Auth::user();
        return view('/user', ['user' => $user]);
        
    }

    // THIS WOULD ALLOW USERS TO EDIT PROFILES
    public function edit($user_id) {
        $user = new User($user_id);
        return view('edit_user');
    }

    // THIS WOULD SAVE USER EDITS TO THE DATABASE MINUS PASSWORDS
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

}