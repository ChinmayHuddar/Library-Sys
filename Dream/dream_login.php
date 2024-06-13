<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="myStyle.css">
    <style>
		body
		{
        background-image: url('lib1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
		font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
		}
		h1{
			color: white;
		}
        div.card 
		{
            border: 1px solid lightgrey;
            margin-left: 27%;
			margin-bottom: 60px;
            display: inline-block;
            padding: 30px;
            border-radius: 5%;
            background-color: aliceblue;
		}
        div.container 
		{
            padding: 20px;
            font-size: 30px;
        }
		
		#imeg
		{
				padding-left: 18px;
			
		}
		img{
			border-radius: 50%;
			border: 5px solid transparent;
			background: linear-gradient(70deg,  #ff0f7b 20%, #f89b29 100%);
		}
		.alignleft{
			float: left;
		}
		.alignright{
			float: right;
		}
		a:link {
			color: blue;
			background-color: transparent;
  			text-decoration: none;
		}
		a:visited{
			color: blue;
			background-color: transparent;
  			text-decoration: none;
		}
		a:hover{
			color: orange;
			background-color: transparent;
			text-decoration: none;
		}
		footer{
			text-align: center;
			padding: 5px;
			color: white;
		}
    </style>
</head>
<body>
<h1 align="center">Dream Library</h1> 
<div class="card">
<div id="imeg">
   <img src="PPVC_4.png" alt="college" border="2" height="250" width="500">
    </div>
	<div class="container">
        <form method="post">
            <label for="username">Username</label><br>
            <input type="email" style="width:500px;border: none;
            border-bottom: 1px solid #393838;
            font-size: 30px;
            background-color: lightcyan;" 
			name="usr" placeholder="Enter Username" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" style="width:500px;" name="pas" placeholder="Enter Password" required><br><br>
			<div id="textboxx">
			<p class="alignright"><a href="http://localhost/fg.php">Forgot password?</a></p> 
			<p class="alignleft"><a href="http://localhost/sign_up.php">Create Account</a></p>
			</div>
			<input type="submit" name="login">
        </form><br>
    </div>
</div>
<footer>
<p>COPYRIGHTS &#169 RESERVED 2021-<br>
<p>PPVC_4 TECH TEAM</p>
</footer>
<?php
if(isset($_POST['login']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "libdb";

	$usr=$_POST['usr'];
	$pas=$_POST['pas'];

	$flag=0;

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT username,password FROM login";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) 
	  {
		if($usr==$row['username'] && $pas==$row['password'])
		{
			$flag++;
		}
	  }
	} else {
	  echo "Either Username or Password is Incorrect</br>";
	}
	if ($flag==1)
	{
			header("refresh: 0; url= http://localhost/dream_home.php"); 
	}
	
	$conn->close();
}
?>
<script>
var flag = "<?php echo $flag; ?>";
if(flag==0)
{
	alert("Invalid Username or Password");
}
</script>
</body>
</html>