<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Medical Terrace') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <script src="{{ asset('lumino/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('lumino/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('lumino/js/chart.min.js') }}"></script>
	<script src="{{ asset('lumino/js/chart-data.js') }}"></script>
	<script src="{{ asset('lumino/js/easypiechart.js') }}"></script>
	<script src="{{ asset('lumino/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('lumino/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('lumino/js/custom.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


     <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/styles.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css"/>

</head>
<body>
    <div id="app">
        <main class="py-4">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>MEDICAL TERRACE </span>(Admin Dashboard)</a>
				<ul class="nav navbar-top-links navbar-right">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

    @guest
    @else
            <!-- <div class="col-md-3"> -->
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <div class="profile-sidebar">
                    <div class="profile-userpic">
                        <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">Username</div>
                        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="divider"></div>
                <form role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <ul class="nav menu">
                    <li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                    <li><a href=""><em class="fa fa-calendar">&nbsp;</em> 医師・医療従事者</a></li>
                    <li><a href=""><em class="fa fa-bar-chart">&nbsp;</em>医療機関</a></li>
                    <li><a href=""><em class="fa fa-toggle-off">&nbsp;</em> 病気と知識</a></li>
                    <li><a href=""><em class="fa fa-navicon">&nbsp;</em>特集</a></li>
                    <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                        <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                        </a>
                        <ul class="children collapse" id="sub-item-1">
                            <li><a class="" href="#">
                                <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                            </a></li>
                            <li><a class="" href="#">
                                <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                            </a></li>
                            <li><a class="" href="#">
                                <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                            </a></li>
                        </ul>
                    </li>
                </ul>
	</div><!--/.sidebar-->
            <!-- </div> -->
            @endguest
            <!-- <div class="col-md-9"> -->
            @yield('content')
            <!-- </div> -->
        </main>
    </div>
    <script type="text/javascript">
        //add academic div
$('.add').on('click', add);
function add(e) {
  var new_chq_no = parseInt($('#total_chq').val()) + 1;
  var new_input = $('#academic').html();
  var aaa = new_input + '<br>';
  $('#new_chq').append(aaa);
  e.preventDefault();
}


//add another fields for work experience
$('.add_work_exp').on('click', add_work_exp);
function add_work_exp(e) {
  var new_input = $('#work_exp').html();
  var aaa = new_input + '<br>';
  $('#new_work_exp').append(new_input);
  e.preventDefault();
}

//add another fields for another awards
$('.add_awards').on('click', add_awards);
function add_awards(e) {
  var new_input = $('#awards_div').html();
  var aaa = new_input + '<br>';
  $('#new_awards').append(new_input);
  e.preventDefault();
}
    </script>
</body>
</html>
