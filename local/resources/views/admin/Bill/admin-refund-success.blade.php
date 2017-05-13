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

<p>{{$message}}</p>

@endsection