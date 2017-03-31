@extends('admin.admin-master')

@section('title', 'Trang Danh Mục')

@section('content')
<table class="function_table" style="margin: 0px auto;">
	<tr>
		<td class="function_item user_add"><a href="">Thêm Chuyến Tàu</a></td>
		<td class="function_item user_list"><a href="">Quản Lý Chuyến Tàu</a></td>
	</tr>
	<tr>
		<td class="function_item cate_add"><a href="{!! route('getTrainAdd')!!} ">Thêm Tàu</a></td>
		<td class="function_item user_list"><a href="{!! route('getTrainList')!!} "> Quản Lý Tàu</a></td>
		<td rowspan="3" class="statistics_panel">
			<h3>Thống kê:</h3>
			<ul>
				<li>Tổng số danh mục:</li>
				<li>Tổng số tin:</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="function_item cate_add"><a href="">Thêm Toa Tàu</a></td>
		<td class="function_item user_list"><a href="">Quản Lý Toa Tàu</a></td>
	</tr>
	<tr>
		<td class="function_item cate_add"><a href="{!! route('getStationAdd')!!}">Thêm Ga Tàu</a></td>
		<td class="function_item user_list"><a href="{!! route('getStationList')!!}">Quản Lý Ga Tàu</a></td>
	</tr>
</table>    
@endsection