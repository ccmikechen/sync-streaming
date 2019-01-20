<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<title>達美樂分店資訊管理系統</title>
</head>

<body style="background-color: #EEEEEE">
<div class="wrap" style="margin-top: 84.5px">
	<div class="loginWrap">
		<h1 class="logo"></h1>
		<div class="loginWrapInner">
			<div class="loginForm">
				<form action="/auth/login" method="post">
					<div class="input-zone">
						<input type="text" name="username" placeholder="帳號" maxlength="20"></input>
					</div>
					<div class="input-zone" style="margin-top: 6px">
						<input type="password" name="password" placeholder="密碼"></input>
					</div>
					<div class="submit-zone" style="margin-top: 20px">
						<input type="submit" class="submit-btn" value="登入"></input>
					</div>
				</form>
			</div>
			<div class="optionForm">			
				<div style="width: 100%; text-align: left; float: left; margin: 6px 0 0 -10px;">
					<a href="/register">註冊新帳號</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

</script>

</body>

</html>