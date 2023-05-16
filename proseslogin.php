<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SELAMAT DATANG</h2></center>	
	<br/>
	<div class="Login">
		<form action="Login.php" method="post" onSubmit="return validasi()">
			<div>
                <center><label>Username:</label><center>
				<center><input type="text" name="username" id="username" /></center>
			</div>
			<div>
                <center><label>Password:</label><center>
				<center><input type="password" name="password" id="password" /><center>
			</div>			
			<div>
            <br>
                <center><input type="submit" value="Login" class="tombol"><center>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>