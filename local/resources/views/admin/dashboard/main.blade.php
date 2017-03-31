@extends('admin.admin-master')

@section('title', 'Trang Chinh')

@section('content')
<table class="function_table" style="margin: 0px auto;">
	<tr>
		<td class="function_item user_add"><a href=" {!! route('getEmployeeAdd')!!} ">Thêm user</a></td>
		<td class="function_item user_list"><a href="{!! route('getEmployeeList')!!}">Quản lý user</a></td>
		<!-- <td rowspan="3" class="statistics_panel">
			<h3>Thống kê:</h3>
			<ul>
				<li>Tổng số user:</li>
				<li>Tổng số danh mục:</li>
				<li>Tổng số tin:</li>
			</ul>
		</td> -->
	</tr>
	<tr>
		<td class="function_item cate_list"><a href="admin\dashboard\cate">Quản Lý Danh Mục</a></td>
		<td class="function_item news_list"><a href="">Thống kê</a></td>
	</tr>
	
</table>    
@endsection