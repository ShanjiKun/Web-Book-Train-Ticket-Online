@extends('admin.admin-master')

@section('title', 'Danh sách Toa Tàu')
@section('logo', 'Danh Sách Toa Tàu')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Mã Toa Tàu</td>
        <td>Tên Toa Tàu</td>
        <td>Số lượng Chỗ Ngồi</td>
        <td>Tên Tàu</td>
        <td>Loại Chỗ</td>
        <td>Số Toa</td>
        <td class="action_col">Cập Nhật</td>
    </tr>
    <?php $i =0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
        <tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item->car_id!!}</td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->name !!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->num_seat!!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->t!!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->s !!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->ordinal!!}</span></td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getCarEdit', ['id' => $item->car_id])!!}"><img src="/Web-Book-Train-Ticket-Online/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! $url = route('getCarDelete', ['id' => $item->car_id])!!}"><img src="/Web-Book-Train-Ticket-Online/images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
   
</table>
@endsection