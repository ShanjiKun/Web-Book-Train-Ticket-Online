@extends('admin.admin-master')

@section('title', 'Thêm tàu')
@section('logo', 'Thêm Tàu')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Tàu</legend>
		<span class="form_label">Tên Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtTrainName" class="textbox" value="{!! old('txtTrainName')!!}"/>
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTrainAdd" value="Thêm Tàu" class="button" onclick="return acceptDelete('Bạn có muốn thêm không')"/>
		</span>
	</fieldset>
</form>  
@endsection