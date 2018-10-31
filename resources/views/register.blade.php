<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册 - 知乎 - Thousands Find</title>
	<link rel="stylesheet" type="text/css" href="{{PUBLIC_ADMIN_PATH}}style/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box register-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">知乎</h1>
		<h2 class="sub-title">生活热爱分享 - Thousands Find</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="{{route('login')}}">登录</a>
				<a href="{{route('register')}}" class="active">注册</a>
				<div class="slide-bar slide-bar1"></div>
			</div>
		</div>
		<form action="{{route('doreg')}}" method="post">
			<div class="login form">
				<div class="group">
					<div class="group-ipt user{{ $errors->has('username') ? ' has-error' : '' }}">
						<input type="text" name="username" id="username" class="ipt" placeholder="选择一个用户名" autocomplete="off" value="{{old('username')}}">
						@if ($errors->has('username'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('username') }}</strong>
	                        </span>
	                    @endif
					</div>
					<div class="group-ipt password{{ $errors->has('password') ? ' has-error' : '' }}">
						<input type="password" name="password" id="password" class="ipt" placeholder="设置登录密码">
						@if ($errors->has('password'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('password') }}</strong>
	                        </span>
	                    @endif
					</div>
					<div class="group-ipt confirm_password{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
						<input type="password" name="password_confirmation" id="confirm_password" class="ipt" placeholder="重复密码">
						@if ($errors->has('password_confirmation'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('password_confirmation') }}</strong>
	                        </span>
	                    @endif
					</div>
					<div class="group-ipt email{{ $errors->has('email') ? ' has-error' : '' }}">
						<input type="email" name="email" id="email" class="ipt" placeholder="邮箱地址" autocomplete="off" value="{{old('email')}}">
						@if ($errors->has('email'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('email') }}</strong>
	                        </span>
	                    @endif
					</div>
					<div class="group-ipt verify{{ $errors->has('captcha') ? ' has-error' : '' }}">
						<input type="text" name="captcha" id="captcha" class="ipt" placeholder="输入验证码" autocomplete="off" value="{{old('captcha')}}">
						<img src="{{captcha_src('flat')}}" class="imgcode">
						@if ($errors->has('captcha'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('captcha') }}</strong>
	                        </span>
	                    @endif
					</div>
				</div>
			</div>
			<div class="button">
				{{csrf_field()}}
				<button type="submit" class="login-btn register-btn" id="button">注册</button>
			</div>
		</form>
	</div>
</div>

<div class="footer">
	<p>知乎 - Thousands Find</p>
	<p>Designed By ZengRong & <a href="zrong.me">mycodes.net</a> 2016</p>
</div>

<script src='{{PUBLIC_ADMIN_PATH}}js/particles.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/background.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/jquery.min.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/layer/layer.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/index.js' type="text/javascript"></script>
<script>
	$('.imgcode').hover(function(){
		layer.tips("看不清？点击更换", '.verify', {
        		time: 6000,
        		tips: [2, "#3c3c3c"]
    		})
	},function(){
		layer.closeAll('tips');
	}).click(function(){
		$(this).attr('src','{{captcha_src('flat')}}' + Math.random());
	})

	$(".login-btn").click(function(){
		var username = $("#username").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var verify = $("#verify").val();
		// $.ajax({
		// url: 'http://www.zrong.me/home/index/userLogin',
		// type: 'post',
		// jsonp: 'jsonpcallback',
  //       jsonpCallback: "flightHandler",
		// async: false,
		// data: {
		// 	'email':email,
		// 	'password':password,
		// 	'verify':verify
		// },
		// success: function(data){
		// 	info = data.status;
		// 	layer.msg(info);
		// }
		// })

	})
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	})
</script>
</body>
</html>