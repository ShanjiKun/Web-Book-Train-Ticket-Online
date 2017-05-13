@extends('admin.admin-master')

@section('title', 'Thêm Nhân Viên')
@section('logo', 'Thêm Nhân Viên')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Nhân Viên</legend>
		<span class="form_label">Họ và Tên:</span>
		<span class="form_item">
			<input type="text" name="txtName" class="textbox" value="{!! old('txtName')!!}" />
		</span><br />
		<span class="form_label">Tên Đăng Nhập:</span>
		<span class="form_item">
			<input type="text" name="txtUser" class="textbox" value="{!! old('txtUser')!!}"/>
		</span><br />
		<span class="form_label">Email:</span>
		<span class="form_item">
			<input type="email" name="email" class="textbox" value="{!! old('email')!!}"/>
		</span><br />
		<span class="form_label">Mật Khẩu:</span>
		<span class="form_item">
			<input type="password" name="txtPass" class="textbox" />
		</span><br />
		<span class="form_label">Xác Nhận Mật Khẩu:</span>
		<span class="form_item">
			<input type="password" name="txtRepass" class="textbox" />
		</span><br />
		<span class="form_label">Chức Vụ:</span>
		<span class="form_item">
			<input type="radio" name="rdoLevel" value="1" checked="checked"
			@if (old('rdoLevel') ==1)
				checked
			@endif
			/> Quản Trị Viên 
			
			<input type="radio" name="rdoLevel" value="2"  
			@if (old('rdoLevel') ==2)
				checked
			@endif
			/> Nhân Viên
			
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnUserAdd" value="Thêm Nhân Viên" class="button"/>
		</span>
	</fieldset>
</form>    
@endsection