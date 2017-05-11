@extends('admin.admin-master')

@section('title', 'Sửa thông tin tàu')
@section('logo', 'Cập Nhật Tàu')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Tàu</legend>
		
		<span class="form_label">Tên Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtTrainName" class="textbox" value="{!! old('txtTrainName', isset($data ["name"]) ? $data["name"] : null)!!}"/>
		</span><br />
		<span class="form_label"></span>
		<span class="form_label">Giá Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtFare" class="textbox" value="{!! old('txtFare', isset($data ["name"]) ? $data["name"] : null)!!}"/>
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTrainEdit" value="Sửa Tàu" class="button" onclick="return acceptDelete('Bạn có muốn sửa không')"/>
		</span>
	</fieldset>
</form>  
@endsection