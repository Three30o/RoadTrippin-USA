@extends("layout")

@section("content")

    <div class="welcome-body">
        <div>
            <header>
                <nav>
                    <div class="welcome-nav-logo">RoadTrippin'</div>
                    <div><a class="welcome-nav-signup" href="auth/register">Sign Up</a></div>
                </nav>
            </header>
            <div class="welcome-background">
                <span class="title">Journey Across the USA</span>
                <h1><span class="welcome-background-logo">RoadTrippin'</span> USA</h1>
                <div class="lightbox">
                    
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
                                <button type="submit" class="lightbox-login">Login</button>
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
