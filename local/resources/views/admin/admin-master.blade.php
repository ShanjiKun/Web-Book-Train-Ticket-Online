<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Huyen.Info" />
    <!-- <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/style.css') }}">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/jquery.timepicker.css') }}" />
    <script type="text/javascript" src="{{ asset('/js/lib/jquery.timepicker.min.js') }}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/bootstrap-datepicker.css') }}" />
    <script type="text/javascript" src="{{ asset('/js/lib/bootstrap-datepicker.js') }}"></script>

    
<<<<<<< HEAD
=======

>>>>>>> dev-admin

	<title>Admin Area :: @yield('title')</title>
</head> 
    <body>
        <div id="layout">
            <div id="top">
                <div class="banner-left-logo">
                    <div class="banner-right">
                        Admin Area :: @yield('logo')
                    </div>
                </div>
            </div>
        	<div id="menu">
        		<table width="100%">
        			<tr>
        				<td>
        					<a href="{!! route('admin')!!}">Trang chính</a> | <a href="{!! route('admin')!!}">Quản lý Admin</a> | <a href="admin/dashboard/cate">Quản lý danh mục</a> | <a href="">Quản lý tin</a>
        				</td>
        				<td align="right">
        					Xin chào {!! Auth::User() -> username !!} | <a href="{!! url('logout')!!}">Logout</a>
        				</td>
        			</tr>
        		</table>
        	</div>
            <div id="main">
                @include('admin\block\error')
                @include('admin\block\flash')
        		@yield('content')
        	</div>
            <div id="bottom">
            	<div class="et-col-md-12 text-center" style="font-size: 10px; color: #999;">
                    <img src="http://dsvn.vn/images/fptlogo.png" width="28" height="17">
                    Copyright by FPT Technology Solutions
                </div>
                
            </div>
        </div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/admin/admin-master.js') }}"></script>
    </body>
</html>