@extends('admin.admin-master')

@section('title', 'Danh sách Hành Khách')
@section('logo', 'Danh Sách Hành Khách')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Họ và Tên</td>
        <td>Email</td>
        <td class="action_col">Cập Nhật</td>
    </tr>
    <?php $i =0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
        <tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item["name"]!!}</td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item["email"]!!}</span></td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getUserDelete', ['id' => $item["user_id"]])!!}" onclick="return acceptDelete('Bạn có muốn xóa không')"><img src="/Web-Book-Train-Ticket-Online/images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
   
</table>
@endsection