@extends('layout')

@section('content')	
	<div class="home-background">
        <div>
            <div class="user-background">
                <h1>Welcome {{ $user->username }}!!</h1>
                <div class="user-img">
                    <img src="/images/scott.jpg" alt="">
                </div>  
                <p>Member Since: June 2015</p>
                <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
                <p>Email: {{ $user->email }}</p>
                <div class="delete-user">
                    <a href="user/delete">Delete</a> Your User Profile 
                    <span class="warning">(*Warning: This action cannot be undone*)</span>
                </div>
            </div>    
        </div>    
    </div>
@endsection