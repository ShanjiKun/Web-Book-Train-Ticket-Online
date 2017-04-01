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
<h1 style="text-align:center; color:#0091d4">THỐNG KÊ</h1>

<table>
  <tr>
    <th style="text-align:center">Danh Mục</th>
    <th style="text-align:center">Số Lượng</th>
  </tr>
  <tr>
    <td style="text-align:center">Admin</td>
    <td style="text-align:center">{!!$user!!}</td>
    
  </tr>
  <tr>
    <td style="text-align:center">Tàu</td>
    <td style="text-align:center">{!!$train!!}</td>
    
  </tr>
  <tr>
    <td style="text-align:center">Ga Tàu</td>
    <td style="text-align:center">{!!$station!!}</td>
  </tr>
  
</table>

@endsection