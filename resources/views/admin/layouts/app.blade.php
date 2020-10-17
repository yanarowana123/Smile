<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Smile Admin Panel</title>


    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('index')}}" class="brand-link">
            На сайт
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            @php
                $isHomeActive =   (request()->route()->parameter('block') =='header'&&
    request()->route()->parameter('page') =='home')
                ||request()->route()->named('admin.feature.work.*')
                ||(request()->route()->parameter('block') =='feature'&&
    request()->route()->parameter('page') =='home')
                ||request()->route()->named('admin.feature.tech.*')
                ||request()->route()->named('admin.feature.home.*')
            ||(request()->route()->parameter('block') =='consultant'&&
request()->route()->parameter('page') =='home');

            $isAboutActive = (request()->route()->parameter('block') =='header'&&
    request()->route()->parameter('page') =='about')
                ||(request()->route()->parameter('block') =='feature'&&
    request()->route()->parameter('page') =='about');

            $isServiceActive = (request()->route()->parameter('block') =='header'&&
    request()->route()->parameter('page') =='service')
                ||request()->route()->named('admin.feature.service.*');

            $isTeamActive = (request()->route()->parameter('block') =='header'&&
    request()->route()->parameter('page') =='staff')
                ||request()->route()->named('admin.staff.*');

             $isWorkActive = (request()->route()->parameter('block') =='header'&&
    request()->route()->parameter('page') =='work')
                ||(request()->route()->parameter('block') =='feature'&&
    request()->route()->parameter('page') =='work')
            @endphp
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item has-treeview {{$isHomeActive?'menu-open':''}}">
                        <a href="#" class="nav-link {{$isHomeActive?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Главная
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['home','header'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='header'&&
request()->route()->parameter('page') =='home')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Баннер</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.feature.work.index')}}"
                                   class="nav-link
                        {{request()->route()->named('admin.feature.work.*')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Как мы работаем</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['home','feature'])}}"
                                   class="nav-link
                   {{(request()->route()->parameter('block') =='feature'&&
request()->route()->parameter('page') =='home')?'active':''}}                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Инновации</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.feature.tech.index')}}"
                                   class="nav-link
                        {{request()->route()->named('admin.feature.tech.*')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Что мы делаем</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.feature.home.index')}}"
                                   class="nav-link
                        {{request()->route()->named('admin.feature.home.*')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Преимущества</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['home','consultant'])}}"
                                   class="nav-link
                   {{(request()->route()->parameter('block') =='consultant'&&
request()->route()->parameter('page') =='home')?'active':''}}                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Онлайн консультация</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{$isAboutActive?'menu-open':''}}">
                        <a href="#" class="nav-link {{$isAboutActive?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                О нас
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['about','header'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='header'&&
request()->route()->parameter('page') =='about')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>1 блок</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['about','feature'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='feature'&&
request()->route()->parameter('page') =='about')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>2 блок</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{$isServiceActive?'menu-open':''}}">
                        <a href="#" class="nav-link {{$isServiceActive?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Услуги
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['service','header'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='header'&&
request()->route()->parameter('page') =='service')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>1 блок</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.feature.service.index')}}"
                                   class="nav-link
                                    {{(request()->route()->named('admin.feature.service.*')?'active':'')}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Все услуги</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{$isTeamActive?'menu-open':''}}">
                        <a href="#" class="nav-link {{$isTeamActive?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Команда
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['staff','header'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='header'&&
request()->route()->parameter('page') =='staff')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>1 блок</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.staff.index')}}"
                                   class="nav-link
                                    {{(request()->route()->named('admin.staff.*')?'active':'')}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Сотдруники</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{$isWorkActive?'menu-open':''}}">
                        <a href="#" class="nav-link {{$isWorkActive?'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Наши работы
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['work','header'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='header'&&
request()->route()->parameter('page') =='work')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>1 блок</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.content.index',['work','feature'])}}"
                                   class="nav-link
                                    {{(request()->route()->parameter('block') =='feature'&&
request()->route()->parameter('page') =='work')?'active':''}}
                                       ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>2 блок</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{route('admin.gallery.index')}}" class="nav-link">
                            <i class="fa-circle nav-icon {{request()->route()->named('admin.gallery.*')?'fas':'far'}}"></i>
                            <p>Изображения</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{route('admin.contact.index')}}" class="nav-link">
                            <i class="fa-circle nav-icon {{request()->route()->named('admin.contact.*')?'fas':'far'}}"></i>
                            <p>Контакты</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Simple Link
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            @yield('content')
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- AdminLTE App -->
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

<script src="{{asset('js/admin.js')}}"></script>
@stack('scripts')
</body>
</html>
