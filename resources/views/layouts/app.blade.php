<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-black.min.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/css/skins/skin-black.min.css') }}">

</head>
<body class="skin-black sidebar-mini">
    {{--<div id="app" class="wrapper">--}}

        {{--<header class="main-header">--}}
            {{--<nav class="navbar navbar-static-top">--}}
                {{--<div class="container-fluid">--}}
                    {{--<div class="navbar-header">--}}
                        {{--<a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>--}}
                        {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">--}}
                            {{--<i class="fa fa-bars"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}

                    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
                    {{--<div class="collapse navbar-collapse" id="navbar-collapse">--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                            {{--<li><a href="#">Link</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Action</a></li>--}}
                                    {{--<li><a href="#">Another action</a></li>--}}
                                    {{--<li><a href="#">Something else here</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">Separated link</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">One more separated link</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<form class="navbar-form navbar-left" role="search">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" id="navbar-search-input" placeholder="Search">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--<ul class="nav navbar-nav navbar-right">--}}
                            {{--<li><a href="#">Link</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Action</a></li>--}}
                                    {{--<li><a href="#">Another action</a></li>--}}
                                    {{--<li><a href="#">Something else here</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">Separated link</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div><!-- /.navbar-collapse -->--}}
                {{--</div><!-- /.container-fluid -->--}}
            {{--</nav>--}}
        {{--</header>--}}


    {{--</div>--}}
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel" style="height:30px">
                    <div class="info" style="left:0;">
                        <p>Alexander Pierce</p>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree" style="margin-top:10px">
                    <li class="header">Navegação</li>

                    <li>
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users"></i> <span>Usuários</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <main class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('page-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </main>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
</body>
</html>
