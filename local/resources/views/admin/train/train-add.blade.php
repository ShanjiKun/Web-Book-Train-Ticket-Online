@extends('admin.admin-master')

@section('title', 'Them user')

@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Tàu</legend>
		<span class="form_label">Mã Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtTrainId" class="textbox" />
		</span><br />
		<span class="form_label">Tên Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtTrainName" class="textbox" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTrainAdd" value="Thêm Tàu" class="button" />
		</span>
	</fieldset>
</form>  
@endsection