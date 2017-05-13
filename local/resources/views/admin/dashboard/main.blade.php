@extends('admin.admin-master')

@section('title', 'Trang Chinh')
@section('logo', 'Trang Chủ')

@section('content')
<table class="function_table" style="margin: 0px auto;">
	<tr>
		<td class="function_item user_add"><a href=" {!! route('getEmployeeAdd')!!} ">Thêm Nhân Viên</a></td>
		<td class="function_item user_list"><a href="{!! route('getEmployeeList')!!}">Quản Lý Nhân Viên</a></td>
	</tr>
	<tr>
		
		<td class="function_item user_list"><a href="{!! route('getUserList')!!}">Quản Lý Users</a></td>
		<td class="function_item chart_list"><a href="admin\dashboard\chart">Thống kê</a></td>
	</tr>
	
	
</table>    
@endsection