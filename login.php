<html>
<head> </head>
<body>
<?php
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		$con = mysqli_connect("localhost", "root", "");
		if(!$con){
			die('can not connect'.mysqli_error());
		}
		mysqli_select_db($con, "sign_up");
		$result = mysqli_query($con, "select * from sign_data");
		$count = 0;
		while($row = mysqli_fetch_array($result)){
			if($row['email'] == $uname && $row['password'] == $pass){
				$count =$count + 1;
			}
			//echo $row['username']. " ". $row['password'];
			//echo "<br/>";
		}
		if($count == 1){
			//echo "access granted";
			//echo "<a href='login.php?uname=$nt[uname]'uname</a>";
			//echo '<script language="javascript">';
			//echo 'alert("WELCOME '.$uname.'")';
			//echo '</script>';
			echo "<script>
			alert('WELCOME');
			window.location.href='homepage2.html';
			</script>";
			//header("Location: http://localhost/week 6 db connectivity/login_success.php?uname=$uname");
			//header("Location: http://localhost/dsw -project/homepage2.html");
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Wrong username or password")';
			echo '</script>';
			//echo "wrong username or password";
		}
		mysqli_close($con);
	?>
</body>
</html>
