<!DOCTYPE html>
<html>
<head>
	<title>Login|manizkou</title>
</head>
<body>
	<form>
		<label for="username">
			<input type="text" name="username" id="username">
		</label>
		<label for="password">
			<input type="password" name="password" id="password">
		</label>
		<label for="showPassword">
			<input type="checkbox" name="showPassword" id="showPassword" onclick="passwordView()">
			Show Password
		</label>
	</form>

	<script type="text/javascript">
		var showPassword=document.getElementById("password");
		function passwordView(){
			if (showPassword.type=="password") {
				showPassword.type="text";
			}else{
				showPassword.type="password";
			}
		}
	</script>

</body>
</html>