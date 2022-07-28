@extends('layouts.app')

@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-8 col-md-offset-2">--}}
    {{--                <div class="panel panel-default">--}}
    {{--                    <div class="panel-heading">Register</div>--}}
    {{--                    <div class="panel-body">--}}
    {{--                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">--}}
    {{--                            {{ csrf_field() }}--}}

    {{--                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">--}}
    {{--                                <label for="first_name" class="col-md-4 control-label">First name</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="first_name" type="text" class="form-control" name="first_name"--}}
    {{--                                           value="{{ old('first_name') }}">--}}

    {{--                                    @if ($errors->has('first_name'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('first_name') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">--}}
    {{--                                <label for="last_name" class="col-md-4 control-label">Last name</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="last_name" type="text" class="form-control" name="last_name"--}}
    {{--                                           value="{{ old('last_name') }}">--}}

    {{--                                    @if ($errors->has('last_name'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('last_name') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">--}}
    {{--                                <label for="login" class="col-md-4 control-label">Login</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="lastName" type="text" class="form-control" name="login"--}}
    {{--                                           value="{{ old('login') }}">--}}

    {{--                                    @if ($errors->has('login'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('login') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}


    {{--                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="email" type="email" class="form-control" name="email"--}}
    {{--                                           value="{{ old('email') }}">--}}

    {{--                                    @if ($errors->has('email'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--                                <label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="password" type="password" class="form-control" name="password">--}}

    {{--                                    @if ($errors->has('password'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
    {{--                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="password-confirm" type="password" class="form-control"--}}
    {{--                                           name="password_confirmation">--}}

    {{--                                    @if ($errors->has('password_confirmation'))--}}
    {{--                                        <span class="help-block">--}}
    {{--                                        <strong>{{ $errors->first('password_confirmation') }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group">--}}
    {{--                                <div class="col-md-6 col-md-offset-4">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        <i class="fa fa-btn fa-user"></i> Register--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form method="POST" action="{{ url('/register') }}" class="auth-form">
        {{ csrf_field() }}
        <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <h2>Register</h2>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">

                    <!--   First name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="First name" name="first_name"
                           value="{{ old('first_name') }}">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Last name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="Last name" name="last_name"
                           value="{{ old('last_name') }}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Login name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="Login" name="login"
                           value="{{ old('login') }}">
                    @if ($errors->has('login'))
                        <span class="help-block">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                    @endif
                    <br>
                    <!--   Email Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="Email" name="email"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <br>

                    <!--  Password Input-->
                    <input class="form-input" type="password" placeholder="Password" id="pwd" name="password">
                    <!--      Show/hide password  -->
                    <span>
        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
     </span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <br>

                    <!-- Password-confirm Input-->
                    <input class="form-input" type="password" placeholder="Confirm Password" id="pwd" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-user-plus"></i> Register
                    </button>
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
