@extends('admin.admin-master')

@section('title', 'Trang Danh Mục')
@section('logo', 'Trang Danh Mục')
@section('content')
<table class="function_table" style="margin: 0px auto;">

	<tr>
		<td class="function_item trip_add"><a href="{!! route('getTripAdd')!!}">Thêm Chuyến Tàu</a></td>
		<td class="function_item train_add"><a href="{!! route('getTrainAdd')!!} ">Thêm Tàu</a></td>
		<td class="function_item car_add"><a href="{!! route('getCarAdd')!!} ">Thêm Toa Tàu</a></td>
		<td class="function_item station_add"><a href="{!! route('getStationAdd')!!}">Thêm Ga Tàu</a></td>
	</tr>	
	<tr>
		<td class="function_item trip_list"><a href="{!! route('getTripList')!!}">Quản Lý Chuyến Tàu</a></td>
		<td class="function_item train_list"><a href="{!! route('getTrainList')!!} "> Quản Lý Tàu</a></td>
		<td class="function_item car_list"><a href="{!! route('getCarList')!!} ">Quản Lý Toa Tàu</a></td>
		<td class="function_item station_list"><a href="{!! route('getStationList')!!}">Quản Lý Ga Tàu</a></td>

	</tr>
	<tr>
	 	<td class="function_item user_list"><a href="{!! route('getUserList')!!}">Quản Lý Users</a></td>
 	</tr>
</table>    
@endsection