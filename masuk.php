<!DOCTYPE HTML>
<html>
<head>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bungkus">
	<div id="atas">
		<div id="banner"></div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="form.php">Register</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="masuk.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
	<div class="masuk">
		<div class="login">
			<center>
				<h1>Admin Login</h1>
				<img src="img/admin.png" width="200px"/>
			</center>
			<form action="login.php" method="post">
				<table>
					<tr>
						<td>ID</td>
						<td><input type="text" name="username" size="20"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" size="20"></td>
					</tr>
					<tr>
						<td rowspan="2"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="Login" value="LOGIN">
						<input type="reset" name="reset" value="RESET"></td>
					</tr>	
				</table>
			</form>
		</div>
	</div>
</div>

</body>
</html>