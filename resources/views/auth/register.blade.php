@extends('layouts.login')
@section('content')

    <div class="panel panel-signin">
        <div class="panel-body">
            <div class="logo text-center">
                <a class="btn btn-dark">Meetup</a>
            </div>
            <br />
            <h4 class="text-center mb5">Not a Member?</h4>
            <p class="text-center">Sign up for your account</p>
            <div class="mb30"></div>
            @if ($message = Session::get('success'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif


            @if ($message = Session::get('warning'))

                <div class="alert alert-warning">

                    <p>{{ $message }}</p>

                </div>

            @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Names">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                <input id="password" type="password" class="form-control" name="password" placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


    @endsection