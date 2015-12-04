@extends('layout')
@inject('cdiscount', 'cdiscount')

@section('body')
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">
                                        <p class="text-center">
                                            {{ \Auth::user()->username }}
                                            <span class="text-muted text-xs block">{{ \Auth::user()->role }}<b class="caret"></b></span>
                                        </p>

                                    </strong>
                                </span>
                                </span>
                            </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ url('auth/logout') }}">Déconnexion</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        CC
                    </div>
                </li>
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i> <span class="nav-label">Accueil</span></a>
                </li>
                <li class="{{ Request::is('cart*') ? 'active' : '' }}">
                    <a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Panier</span>
                        @if ($cart_total > 0)
                            <span class="label label-primary pull-right">
                                {{ number_format($cart_total, 2, ',', ' ') }} €
                            </span>
                        @endif
                    </a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ url('auth/logout') }}">
                            <i class="fa fa-sign-out"></i> Déconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    @include('flash')
                </div>
            </div>
            @yield('content')
        </div>
    </div>
@stop