@extends('admin.admin-master')

@section('title', 'Trang Thống Kê')
@section('logo', 'Thống Kê')

@section('content')
<h2 style="text-align: center">Đường Sắt Việt Nam</h2>
  <table class="table">
    <thead>
      <tr class="warning">
        <th style="text-align: center">Danh Mục</th>
        <th style="text-align: center">Số Lượng</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td style="text-align: center">Admin</td>
        <td style="text-align: center">{!! $user!!}</td>
    
      </tr>   
      <tr class="danger">
        <td style="text-align: center">Ga</td>
        <td style="text-align: center">{!! $station!!}</td>
      </tr>
      <tr class="info">
        <td style="text-align: center">Tàu</td>
        <td style="text-align: center">{!! $train!!}</td>
      
      </tr>   
      
      
    </tbody>
  </table>

@endsection