<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台登录</title>
	<link rel="stylesheet" type="text/css" href="{{PUBLIC_ADMIN_PATH}}css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="{{PUBLIC_ADMIN_PATH}}css/demo.css" />
	<!--必要样式-->
	<link rel="stylesheet" type="text/css" href="{{PUBLIC_ADMIN_PATH}}css/component.css" />
	<!--[if IE]>
	<script src="js/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container demo-1">
		<div class="content">
			<div id="large-header" class="large-header">
				<canvas id="demo-canvas"></canvas>
				<div class="logo_box">
					<h3>欢迎你</h3>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li style="color: red;">{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					<form name="f" method="post" action="{{route("dologin")}}">
						<div class="input_outer">
							<span class="u_user"></span>
							<input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
						</div>
						<div class="input_outer">
							<span class="us_uer"></span>
							<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							{{csrf_field()}}
						</div>
						<div class="input_box" style="overflow: hidden;">
							<div class="input_outer" style="width: 50%;float:left;">
								<span class="captcha"></span>
								<input name="captcha" class="text" style="color: #FFFFFF !important; width:90px;" type="text" placeholder="请输入验证码" >
							</div>
							<div class="yzm" style="float:right;">
								<img src="{{captcha_src('inverse')}}" style="cursor: pointer;height: 46px;" onclick="this.src='{{captcha_src()}}'+Math.random()">
							</div>
						</div>

						<div class="mb2"><a class="act-but submit" href="javascript:;" style="color: #FFFFFF">登录</a></div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- /container -->
	<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="{{PUBLIC_ADMIN_PATH}}js/TweenLite.min.js"></script>
	<script src="{{PUBLIC_ADMIN_PATH}}js/EasePack.min.js"></script>
	<script src="{{PUBLIC_ADMIN_PATH}}js/rAF.js"></script>
	<script src="{{PUBLIC_ADMIN_PATH}}js/demo-1.js"></script>
	<script>
		$(".act-but").click(function() {
			$("form[name='f']").submit();
		});
	</script>
</body>
</html>