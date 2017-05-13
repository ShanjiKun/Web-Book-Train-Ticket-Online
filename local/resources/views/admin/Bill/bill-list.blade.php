@extends('admin.admin-master')

@section('title', 'Danh sách Hóa Đơn')
@section('logo', 'Danh Sách Hóa Đơn')
@section('content')
<style type="text/css">
    .btn{
            margin-bottom: 15px;
            padding: 2px 10px;
            background-color: #0686b7;
            border: 1px solid #faf8f9;
            box-shadow: 1px 1px 1px 1px #d7d7d7;
            color: #fff;
            text-decoration: none;
            min-width: 40px;
            font-size: 16px;
        }
</style>
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Mã Hóa Đơn</td>
        <td>Tên Khách Hàng</td>
        <td>Mã Giao Dịch</td>
        <td>Giá</td>
        <td>Tải vé</td>
    </tr>
    <?php $i =0 ?>
    @foreach($data as $item)
        <?php $i++; ?>
        <tr class="list_data">
            <td class="aligncenter">{!! $i !!}</td>
            <td class="list_td aligncenter">{!! $item->bill_id!!}</td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->name !!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->transaction_id!!}</span></td>
            <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">{!! $item->sum_fare!!}</span></td>
        </tr>
    @endforeach
   
</table>
@endsection