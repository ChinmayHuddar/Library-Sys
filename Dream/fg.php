<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
            background-color: lightcyan;"" name="usr" placeholder="Enter Username" required><br><br>
			<input type="submit" name="Check" value="Check">
        </form><br>
    </div>
</div>
<footer>
<p>COPYRIGHTS &#169 RESERVED 2021-<br>
<p>PPVC_4 TECH TEAM</p>
</footer>
<?php
session_start();
if(isset($_POST['Check']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "libdb";

	$usr=$_POST['usr'];


	$flag=0;

	
	$mysqli = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($mysqli->connect_error) 
	{
	  die("Connection failed: " . $mysqli->connect_error);
	}

	$sql = "SELECT username FROM login;";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) 
	  {
		if($usr==$row['username'])
		{
			$_SESSION["USERNAME"]=$_POST['usr'];
			$otp=mt_rand(100000,999999);
			
			$sql .= "UPDATE otp SET value='$otp' where id=0";
			
			if ($mysqli->multi_query($sql) === TRUE) 
			{
				$to=$_POST['usr'];
				$message="Your OTP is $otp";
				$subject="Security Code";
				$header="From: dream.ppvclibrary@gmail.com";
	
				mail($to,$subject,$message,$header);

				header("refresh: 0; url= http://localhost/verify2.php");
			}
			
			else 
			{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			} 
		}
		else 
		{
			$flag=1;
			header("refresh: 0; url= http://localhost/sign_up.php");
		}
	  }
	}
	$mysqli->close();
}
?>
<script>
var flag="<?php echo $flag; ?>";
if(flag==1)
{
	alert("As your account is not created, You will be redirected to Sign Up page");
}
</script>
</body>
</html>