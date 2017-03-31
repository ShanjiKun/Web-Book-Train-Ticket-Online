@extends('admin.admin-master')

@section('title', 'Danh sách chuyến tàu')

@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Mã Chuyến Tàu</td>
        <td>Mã Tàu</td>
        <td>Mã Ga Đi</td>
        <td>Mã Ga đến</td>
        <td>Mã Nhân Viên</td>
        <td>Thời Gian Đi</td>
        <td>Thời Gian Tới</td>
		<td class="action_col">Cập Nhật</td>
	</tr>
    <?php $i=0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
    	<tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item["trip_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["train_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["station_leave_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["station_arrive_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["employee_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["date_leave"]!!}</td>
            <td class="list_td aligncenter">{!! $item["date_arrive"]!!}</td>
            <td class="list_td aligncenter">
                <a href=""><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href=""><img src="images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
</table>
@endsection