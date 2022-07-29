@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row">--}}
    {{--        <div class="col-md-8 col-md-offset-2">--}}
    {{--            <div class="panel panel-default">--}}
    {{--                <div class="panel-heading">Login</div>--}}
    {{--                <div class="panel-body">--}}
    {{--                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
    {{--                        {{ csrf_field() }}--}}

    {{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">--}}

    {{--                                @if ($errors->has('email'))--}}
    {{--                                    <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--                            <label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control" name="password">--}}

    {{--                                @if ($errors->has('password'))--}}
    {{--                                    <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group">--}}
    {{--                            <div class="col-md-6 col-md-offset-4">--}}
    {{--                                <div class="checkbox">--}}
    {{--                                    <label>--}}
    {{--                                        <input type="checkbox" name="remember"> Remember Me--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group">--}}
    {{--                            <div class="col-md-6 col-md-offset-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    <i class="fa fa-btn fa-sign-in"></i> Login--}}
    {{--                                </button>--}}

    {{--                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
    {{--                            </div>--}}
    {{--                            <div>Or</div>--}}
    {{--                            <a class="btn btn-link" href="{{ url('/register') }}">Register</a>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form method="POST" action="{{ url('/login') }}" class="auth-form">
        {{ csrf_field() }}
        <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <h2>Log In</h2>
                    <!--     A welcome message or an explanation of the login form -->
                    <p>login here using your e-mail and password</p>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="help-block">
                    @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                    <br>
                    @if ($errors->has('password'))
                        <strong>{{ $errors->first('password') }}</strong>
                    @endif
                </div>

                <div class="field-set">
                    <!--   user name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="E-mail" name="email"
                           value="{{ old('email') }}">

                    <br>

                    <!--   Password Input-->
                    <input class="form-input" type="password" placeholder="Password" id="pwd" name="password">

                    <!--      Show/hide password  -->
                    <span>
        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
     </span>


                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <div><a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a></div>
                    <button class="log-in">
                        <i class="fa fa-btn fa-user"></i> Log In
                    </button>
                </div>
                <!--   other buttons -->
                <div class="other">
                    <!--      Forgot Password button-->

                    {{--                <button class="btn submits frgt-pass">Forgot Password</button>--}}
                    <br>
                    <!--     Sign Up button -->
                {{--                <button class="btn submits sign-up" >Sign Up--}}
                <!--         Sign Up font icon -->
                    Not a member?<a class="new-account" href="{{ url('/register') }}"> Create account</a>
                    <!--      End Other the Division -->
                </div>
                <!--   End Conrainer  -->
            </div>
            <!-- End Form -->
        </form>

    </div>
    <script>
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
        }

        var pwShown = 0;

        document.getElementById("eye").addEventListener("click", function () {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);

    </script>
@endsection
