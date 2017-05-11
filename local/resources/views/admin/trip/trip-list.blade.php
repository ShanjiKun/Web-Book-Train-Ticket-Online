@extends('admin.admin-master')

@section('title', 'Danh sách chuyến tàu')

@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Mã Chuyến Tàu</td>
        <td>Tên Tàu</td>
        <td>Ga Đi</td>
        <td>Ga đến</td>
        <td>Nhân Viên</td>
        <td>Thời Gian Đi</td>
        <td>Thời Gian Tới</td>
        <td>Thời Gian Bán</td>
		<td class="action_col">Cập Nhật</td>
	</tr>
    <?php $i=0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
    	<tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item->trip_id!!}</td>
            <td class="list_td aligncenter">{!! $item->name!!}</td>
            <td class="list_td aligncenter">{!! $item->t!!}</td>
            <td class="list_td aligncenter">{!! $item->s!!}</td>
            <td class="list_td aligncenter">{!! $item->n!!}</td>
            <td class="list_td aligncenter">{!! $item->date_leave!!}</td>
            <td class="list_td aligncenter">{!! $item->date_arrive!!}</td>
            <td class="list_td aligncenter">{!! $item->date_sell!!}</td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getTripEdit', ['id' => $item->trip_id])!!}"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! $url = route('getTripDelete', ['id' => $item->trip_id])!!}"><img src="images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
</table>
@endsection