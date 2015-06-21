@extends('layout')

@section('content')	
	<div class="home-background">
        <div>
            <div class="user-background">
                <h1>Welcome {{ $user->username }}!!</h1>
                <div class="user-img">Add User Image</div>  
                <p>Member Since: June 2015</p>
                <div class="delete-user">
                    <a href="user/delete">Delete</a> Your User Profile 
                    <span class="warning">(*Warning: This action cannot be undone*)</span>
                </div>
            </div>    
        </div>    
    </div>
@endsection