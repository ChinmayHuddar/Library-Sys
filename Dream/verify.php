<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify_SignUp</title>
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
           <label for="verify_code">Security Code</label><br>
            <input type="number" style="width: 500px;" name="num" placeholder="Enter 6 digit security code" required><br><br>
			<p>We have mailed it to your email</p>
			<input type="submit" name="Verify">
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

if(isset($_POST['Verify']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "libdb";

	$num=$_POST['num'];
	
	$flag=0;

	$usr=$_SESSION["USERNAME"];
	$pas=$_SESSION["PASSWORD"];
	
	$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM otp;";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
		if($num==$row['value'])
		{
			$flag++;
		}
	}
}

if($flag==1)
{

	$sql .= "INSERT INTO login VALUES('$usr','$pas')";

}

else
{
	header("refresh: 0");
}

if (($mysqli->multi_query($sql) === TRUE) && $flag==1) 
{
  header("refresh: 0; url= http://localhost/dream_login.php");
}

$mysqli -> close();

session_unset();

session_destroy();

}
?>
<script>
var flag = "<?php echo $flag; ?>";
if(flag==0)
{
	alert("Invalid OTP");
}
</script>
</html>