@extends('admin.admin-master')

@section('title', 'Sửa Ga Tàu')
@section('logo', 'Cập Nhật Ga Tàu')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Ga Tàu</legend>
		<span class="form_label">Tên Ga Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtStationName" class="textbox" value="{!! old('txtStationName',isset($data["name"]) ? $data["name"] : null)!!}"/>
		</span><br />
		<span class="form_label">Thành Phố:</span>
		<span class="form_item">
			<input type="text" name="txtCity" class="textbox" value="{!! old('txtCity',isset($data["city"]) ? $data["city"] : null)!!}"/>
		</span><br />
		<span class="form_label">Địa Chỉ:</span>
		<span class="form_item">
			<input type="text" name="txtAddress" class="textbox" value="{!! old('txtAddress',isset($data["address"]) ? $data["address"] : null)!!}"/>
		</span><br />
		<span class="form_label">Khoảng Cách:</span>
		<span class="form_item">
			<input type="text" name="txtDistance" class="textbox" value="{!! old('txtDistance',isset($data["distance"]) ? $data["distance"] : null)!!}"/>
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnStationEdit" value="Sửa Ga Tàu" class="button" onclick="return acceptDelete('Bạn có muốn sửa không')"/>
		</span>
	</fieldset>
</form>  
@endsection