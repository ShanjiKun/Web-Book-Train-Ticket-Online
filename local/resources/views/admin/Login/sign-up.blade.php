<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <!-- <link rel="stylesheet" href="/Web-Book-Train-Ticket-Online/css/style.css" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/style.css') }}">
	<title>Đăng ký</title>
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
</head>
<body>
<div id="layout">
    <div id="top">
        <div class="banner-left-logo" onclick="goHome()">
            <div class="banner-right">
                Đăng ký
            </div>
        </div>
        <script type="text/javascript">
            function goHome(){
                window.location.href = 'Web-Book-Train-Ticket-Online/';
            }
        </script>
    </div>
    <div id="main">    
		<form action="sign-up" method="POST" style="width: 650px; margin: 30px auto;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            @if (count($errors) > 0)
                <ul class="error_msg">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            @endif

            <fieldset>
                <legend class="glyphicon glyphicon-globe">Thông Tin Đăng Ký</legend>                
				<table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span class="form_label">Tên:</span>
                            <span class="form_item">
                                <input type="text" name="txtName" class="textbox" value="{!! old('txtName')!!}" />
                            </span><br />
                            <span class="form_label">Tên đăng nhập:</span>
                            <span class="form_item">
                                <input type="text" name="txtUser" class="textbox" value="{!! old('txtUser')!!}"/>
                            </span><br />
                            <span class="form_label">Email:</span>
                            <span class="form_item">
                                <input type="email" name="email" class="textbox" value="{!! old('email')!!}"/>
                            </span><br />
                            <span class="form_label">Mật khẩu:</span>
                            <span class="form_item">
                                <input type="password" name="txtPass" class="textbox" />
                            </span><br />
                            <span class="form_label">Nhập lại mật khẩu:</span>
                            <span class="form_item">
                                <input type="password" name="txtRepass" class="textbox" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng ký" class="button" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="button" class="button" value="Đăng nhập" onclick="window.location.href = 'login'">
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <a style="" class="btn" href="Web-Book-Train-Ticket-Online/"><< Trang chủ</a>
    </div>
    <div id="bottom">
        <div class="et-col-md-12 text-center" style="font-size: 10px; color: #999;">
            <img src="http://dsvn.vn/images/fptlogo.png" width="28" height="17">
            Copyright by FPT Technology Solutions
        </div>
    </div>
</div>

</body>
</html>