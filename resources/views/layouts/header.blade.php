<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prime Bank Intranet Portal</title>

    <link href="{{ asset('/assets/css/style.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/select2.css')}}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset ('/assets/js/html5shiv.js') }}"></script>

    <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <![endif]-->
</head>

<body>


<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="index.html" class="logo btn btn-dark">
                Meetup
            </a>
            <div class="pull-right">
                <a href="" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->

        <div class="header-right">

            <div class="pull-right">
                @if(Auth::guest())
                    <a class="btn btn-success" href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> LOGIN</a>
                    <a class="btn btn-warning" href="{{url('/register')}}"><i class="fa fa-lock"></i> Register</a>
                @else
                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }}<i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sign Out</a></li>
                    </ul>
                </div><!-- btn-group -->
                    @endif

            </div><!-- pull-right -->

        </div><!-- header-right -->

    </div><!-- headerwrapper -->
</header><?php
/**
 * Created by PhpStorm.
 * User: Erik Van Someren
 * Date: 9/24/2016
 * Time: 13:20
 */