<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <!-- <link rel="stylesheet" href="/Web-Book-Train-Ticket-Online/css/style.css" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/style.css') }}">
	<title>Admin Area :: Login</title>
</head>
<body>
<div id="layout">
    <div id="top">
        <div class="banner-left-logo">
            <div class="banner-right">
                Admin Area :: Login
            </div>
        </div>
    </div>
    <div id="main">    
		<form action="" method="POST" style="width: 650px; margin: 30px auto;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            @if (count($errors) > 0)
                <ul class="error_msg">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            @endif

            <fieldset>
                <legend class="glyphicon glyphicon-globe">Thông Tin Đăng Nhập</legend>                
				<table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span class="form_label">Username:</span>
                            <span class="form_item">
                                <input type="text" name="txtUser" placeholder="UserName" class="textbox" />
                            </span><br />
                            <span class="form_label">Password:</span>
                            <span class="form_item">
                                <input type="password" name="txtPass" placeholder="Password" class="textbox" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng nhập" class="button" />
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
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