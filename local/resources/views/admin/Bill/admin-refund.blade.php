@extends('admin.admin-master')

@section('title', 'Thanh Toán Vé Tàu')
@section('logo', 'Thanh Toán Vé Tàu')
@section('content')
<form action="" method="POST" style="width: 650px;">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <fieldset>
        <legend>Thông Tin Thanh Toán</legend>
        <span class="form_label">Mã Thanh Toán:</span>
        <span class="form_item">
            <input type="text" name="txtId" class="textbox"/>
        </span><br />
        <span class="form_label"></span>
        <span class="form_item">
            <input type="submit" name="btnPay" value="Trả vé" class="button"/>
        </span>
    </fieldset>
</form>  
@endsection

