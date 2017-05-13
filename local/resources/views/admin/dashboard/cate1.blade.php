<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Huyen.Info" />
    <!-- <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/style.css') }}">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home/home.css') }}">
    <script type="text/javascript" src="{{ asset('/js/home/home.js') }}"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/pickmeup.css') }}" />
    <script type="text/javascript" src="{{ asset('/js/lib/pickmeup.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/jquery.timepicker.css') }}" />
    <script type="text/javascript" src="{{ asset('/js/lib/jquery.timepicker.min.js') }}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/bootstrap-datepicker.css') }}" />
    <script type="text/javascript" src="{{ asset('/js/lib/bootstrap-datepicker.js') }}"></script>

	<title>Admin Area :: Trang Danh Mục</title>
</head> 
    <body>
        <div id="layout">
            <div id="top">
                <div class="banner-left-logo">
                    <div class="banner-right">
                        Admin Area :: Trang Danh Mục
                    </div>
                </div>
            </div>
        	<div id="menu">
        		<table width="100%">
        			<tr>
        				<td>
        					<a href="admin\dashboard\cate">Quản Lý Danh Mục</a> | <a href="{!! route('getPayment')!!}">Thanh Toán</a> | <a href="{!! route('getAdminRefund')!!}">Trả vé</a> 
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
        		<table class="function_table" style="margin: 0px auto;">

    <tr>
        <td class="function_item trip_add"><a href="{!! route('getTripAdd')!!}">Thêm Chuyến Tàu</a></td>
        <td class="function_item train_add"><a href="{!! route('getTrainAdd')!!} ">Thêm Tàu</a></td>
        <td class="function_item car_add"><a href="{!! route('getCarAdd')!!} ">Thêm Toa Tàu</a></td>
        <!-- <td class="function_item station_add"><a href="{!! route('getStationAdd')!!}">Thêm Ga Tàu</a></td> -->
        <td class="function_item user_list"><a href="{!! route('getUserList')!!}">Quản Lý Users</a></td>
        
    </tr>   
    <tr>
        <td class="function_item trip_list"><a href="{!! route('getTripList')!!}">Quản Lý Chuyến Tàu</a></td>
        <td class="function_item train_list"><a href="{!! route('getTrainList')!!} "> Quản Lý Tàu</a></td>
        <td class="function_item car_list"><a href="{!! route('getCarList')!!} ">Quản Lý Toa Tàu</a></td>
        <!-- <td class="function_item station_list"><a href="{!! route('getStationList')!!}">Quản Lý Ga Tàu</a></td> -->
        <td class="function_item chart_list"><a href="admin\dashboard\chart">Thống kê</a></td>
    </tr>
</table>   
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