@extends('admin.admin-master')

@section('title', 'Thêm Ga Tàu')
@section('logo', 'Thêm Ga Tàu')

@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Ga Tàu</legend>
		<span class="form_label">Tên Ga Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtStationName" class="textbox" />
		</span><br />
		<span class="form_label">Thành Phố:</span>
		<span class="form_item">
			<input type="text" name="txtCity" class="textbox" />
		</span><br />
		<span class="form_label">Địa Chỉ:</span>
		<span class="form_item">
			<input type="text" name="txtAddress" class="textbox" />
		</span><br />
		<span class="form_label">Khoảng Cách:</span>
		<span class="form_item">
			<input type="text" name="txtDistance" class="textbox" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnStationAdd" value="Thêm Ga Tàu" class="button" onclick="return acceptDelete('Bạn có muốn thêm không')"/>
		</span>
	</fieldset>
</form>  
@endsection