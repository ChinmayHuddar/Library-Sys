<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
           <label for="username">Username(Email ID)</label><br>
            <input type="email" style="width:500px;border: none;
            border-bottom: 1px solid #393838;
            font-size: 30px;
            background-color: lightcyan;"" name="usr" placeholder="Enter Username" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" style="width: 500px;" name="pas" placeholder="Enter Password" required><br><br>
			<label for="password">Confirm Password</label><br>
            <input type="password" style="width: 500px;" name="cpas" placeholder="Confirm password" required><br><br>
			<input type="submit" name="Sign_Up">
        </form><br>
    </div>
</div>
<footer>
<p>COPYRIGHTS &#169 RESERVED 2021-<br>
<p>PPVC_4 TECH TEAM</p>
</footer>
</body>

<?php
session_start();
if(isset($_POST['Sign_Up']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "libdb";

	$_SESSION["USERNAME"]=$_POST['usr'];
	$_SESSION["PASSWORD"]=$_POST['pas'];

	$usr=$_POST['usr'];
	$pas=$_POST['pas'];
	$cpas=$_POST['cpas'];

	$otp=mt_rand(100000,999999);

	$sql;
	
	$flag=0;

	$to=$_POST['usr'];
	$message="Your OTP is $otp";
	$subject="Security Code";
	$header="From: dream.ppvclibrary@gmail.com";


	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}
	if($pas === $cpas)
	{
		$flag=1;
		$sql= "UPDATE otp SET value='$otp' where id=0 ";
		mail($to,$subject,$message,$header);
		if(mysqli_query($conn, $sql)) 
		{
			header("Location: http://localhost/verify.php");
		}
	}	
		
	$conn->close();
}
?>
<script>

var flag = "<?php echo $flag; ?>"

if(flag!=1)
{
	alert("Entered Password are not same");
}
</script>
</html>