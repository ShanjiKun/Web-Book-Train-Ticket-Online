@extends('admin.admin-master')

@section('title', 'Danh sach users')

@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Mã Nhân Viên</td>
        <td>Họ và Tên</td>
        <td class="action_col">Cập Nhật</td>
    </tr>
    <?php $i =0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
        <tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item["employee_id"]!!}</td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item["name"]!!}</span></td>
            <td class="list_td aligncenter">
                <a href="{!! $url = route('getEmployeeEdit', ['id' => $item["employee_id"]])!!}"><img src="/Web-Book-Train-Ticket-Online/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{!! $url = route('getEmployeeDelete', ['id' => $item["employee_id"]])!!}" onclick="return acceptDelete('Bạn có muốn xóa không')"><img src="/Web-Book-Train-Ticket-Online/images/delete.png" /></a>
            </td>
        </tr>
    @endforeach
   
</table>
@endsection