@extends('admin.admin-master')

@section('title', 'Cập Nhật Nhân Viên')
@section('logo', 'Cập Nhật Nhân Viên')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Nhân Viên</legend>
		<span class="form_label">Họ và Tên:</span>
		<span class="form_item">
			<input type="text" name="txtName" class="textbox" value="{!! old('txtName',isset($data["name"]) ? $data["name"] : null)!!}"/>
		</span><br />
		<span class="form_label">Tên Đăng Nhập:</span>
		<span class="form_item">
			<input type="text" name="txtUser" class="textbox" value="{!! old('txtUser',isset($data["username"]) ? $data["username"] : null)!!}"/>
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
		@if( Auth::User()->user_id != $data["user_id"])
		<span class="form_label">Chức Vụ:</span>
		<span class="form_item">
			<input type="radio" name="rdoLevel" value="1" 
			@if ($data["level"]==1)
				checked
			@endif
			/> Quản Trị Viên
			<input type="radio" name="rdoLevel" value="2"
			@if ($data["level"]==2)
					checked
				@endif 
			/> Nhân Viên
		</span><br />
		@endif
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnUserEdit" value="Sửa Nhân Viên" class="button" onclick="return acceptDelete('Bạn có muốn sửa không')"/>
		</span>
	</fieldset>
</form>   
@endsection 