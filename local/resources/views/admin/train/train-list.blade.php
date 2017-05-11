@extends('admin.admin-master')

@section('title', 'Danh sách tàu')
@section('logo', 'Danh Sách Tàu')
@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Mã Tàu</td>
        <td>Tên Tàu</td>
        <td>Giá Tàu</td>
		<td class="action_col">Cập Nhật</td>
	</tr>
    <?php $i=0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
    	<tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item["train_id"]!!}</td>
            <td class="list_td aligncenter">{!! $item["name"]!!}</td>
            <td class="list_td aligncenter">{!! $item["fare"]!!}</td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getTrainEdit', ['id' => $item["train_id"]])!!}"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! $url = route('getTrainDelete', ['id' => $item["train_id"]])!!}" onclick="return acceptDelete('Bạn có muốn xóa không')"><img src="images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
</table>
@endsection