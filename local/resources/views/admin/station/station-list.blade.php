@extends('admin.admin-master')

@section('title', 'Danh sách ga tàu')

@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Mã Ga Tàu</td>
        <td>Tên Ga</td>
        <td>Thành Phố</td>
        <td>Địa Chỉ</td>
        <td>Khoảng cách</td>
		<td class="action_col">Cập Nhật</td>
	</tr>
    <?php $i=0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
    	<tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item["station_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["name"]!!}</td>
            <td class="list_td aligncenter">{!! $item["city"]!!}</td>
            <td class="list_td aligncenter">{!! $item["address"]!!}</td>
            <td class="list_td aligncenter">{!! $item["distance"]!!}</td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getStationEdit', ['id' => $item["station_id"]])!!}" ><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! $url = route('getStationDelete', ['id' => $item["station_id"]])!!}" onclick="return acceptDelete('Bạn có muốn xóa không')"><img src="images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
</table>
@endsection