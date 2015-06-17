@extends('layout')

@section('content')	
	<div class="internal-content">
        <h1>User</h1>
        <h3>Welcome {{ $user->username }}!!</h3>
        <div class="user_img">Add User Image</div>  
        <p>Member Since: June 2015</p>
        <div class="delete_user">
            <a href="user/delete">Delete</a> Your User Profile 
            <span class="warning">(*This action cannot be undone*)</span>
        </div>
    </div>
@endsection