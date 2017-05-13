@extends('admin.admin-master')

@section('title', 'Trang Thống Kê')
@section('logo', 'Thống Kê')
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #0091d4;
    color: white;
}
</style>
@section('content')
<h2 style="text-align:center; color:#0091d4">NHÂN VIÊN</h2>

<table>
  <tr>
    <th style="text-align:center">STT</th>
    <th style="text-align:center">Chức Vụ</th>
    <th style="text-align:center">Số Lượng</th>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">Quản Trị Viên</td>
    <td style="text-align:center">{!!$user!!}</td>
    
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">Nhân Viên</td>
    <td style="text-align:center">{!!$user1!!}</td>
    
  </tr>
  
</table>

<h2 style="text-align:center; color:#0091d4">CÁC DANH MỤC</h2>

<table>
  <tr>
    <th style="text-align:center">STT</th>
    <th style="text-align:center">Danh Mục</th>
    <th style="text-align:center">Số Lượng</th>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">Chuyến Tàu</td>
    <td style="text-align:center">{!!$trip!!}</td>
    
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">Tàu</td>
    <td style="text-align:center">{!!$train!!}</td>
    
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">Ga Tàu</td>
    <td style="text-align:center">{!!$station!!}</td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">Toa Tàu</td>
    <td style="text-align:center">{!!$car!!}</td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">Hành Khách</td>
    <td style="text-align:center">{!!$user2!!}</td>
    
  </tr>
</table>
<h2 style="text-align:center; color:#0091d4">HOẠT ĐỘNG BÁN VÉ</h2>

<table>
  <tr>
    <th style="text-align:center">STT</th>
    <th style="text-align:center">Loại Hành Khách</th>
    <th style="text-align:center">Số Lượng</th>
    <th style="text-align:center">Tổng Tiền</th>
  </tr>
  <tr>
    <?php //echo json_encode($num_users) ?>
    <?php $i = 0 ?>
    @foreach($num_users as $item)
        <?php $i++; ?>
            <td style="text-align:center">{!! $i !!}</td>
            <td style="text-align:center">{!! $item->type_passenger!!}</td>
            <td style="text-align:center">{!! $item->total!!}</td>
            <td style="text-align:center">{!! $item->totalCost!!}</td>
    @endforeach
    
  </tr>
</table>

@endsection