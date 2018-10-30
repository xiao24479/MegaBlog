<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>登录 - 知乎 - Thousands Find</title>
	<link rel="stylesheet" href="{{PUBLIC_ADMIN_PATH}}style/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">知乎</h1>
		<h2 class="sub-title">生活热爱分享 - Thousands Find</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="{{route('login')}}" class="active">登录</a>
				<a href="{{route('register')}}">注册</a>
				<div class="slide-bar"></div>
			</div>
		</div>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style="color: red;">{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action="{{route('dologin')}}" method="post">
			<div class="login form">
				<div class="group">
					<div class="group-ipt email">
						<input type="text" name="username" id="username" class="ipt" placeholder="请输入账户" value="{{old('username')}}" autocomplete="off" required>
					</div>
					<div class="group-ipt password">
						<input type="password" name="password" id="password" class="ipt" placeholder="输入您的登录密码" required>
					</div>
					<div class="group-ipt verify">
						<input type="text" name="captcha" id="captcha" class="ipt" placeholder="输入验证码" autocomplete="off" required>
						{{csrf_field()}}
						<img src="{{captcha_src('flat')}}" class="imgcode">
					</div>
				</div>
			</div>

			<div class="button">
				<button type="submit" class="login-btn register-btn" id="button">登录</button>
			</div>
		</form>

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="#">忘记密码？</a>
			</label>
		</div>
	</div>
</div>

<div class="footer">
	<p>知乎 - Thousands Find</p>
	<p>Designed By ZengRong & <a href="zrong.me">mycodes.net</a> 2016</p>
</div>

<script src='{{PUBLIC_ADMIN_PATH}}js/particles.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/background.js' type="text/javascript"></script>
<script src='{{PUBLIC_ADMIN_PATH}}js/jquery.min.js' type="text/javascript"></script>
<!-- <script src='{{PUBLIC_ADMIN_PATH}}js/layer/layer.js' type="text/javascript"></script> -->
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
	});
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	});
</script>
</body>
</html>