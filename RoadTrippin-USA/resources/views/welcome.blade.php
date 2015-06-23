@extends("layout")

@section("content")

    <div class="login-background">
        <div>
            <div class="login-feature">
                <span class="title title-login">Journey Across the USA</span>
                <h1>
                    <span class="login-background-logo">RoadTrippin'</span>
                    <span class="u">U</span><span class="s">S</span><span class="a">A</span> 
                </h1>
                <div class="lightbox lightbox-login">
                    
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="login">
                            <label>E-mail:</label>
                            <div>
                                <input type="email" class="textbox" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="login">
                            <label>Password:</label>
                            <div>
                                <input type="password" class="textbox" name="password">
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <button type="submit" class="lightbox-login-button">Login</button>
                            </div>
                            <div>
                                <a class="" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>  
        </div>
    </div>

@endsection