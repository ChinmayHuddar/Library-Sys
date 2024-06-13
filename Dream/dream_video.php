<!DOCTYPE html>
<html>
<head>
<title> Audio Visual Knowledge </title>
<style>
body{
	background-image: url('lib_img1.jpg');
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
	color: white;
}

ul{
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	background-color: black;
	width:100%;
}

li{
	float: left;
	border-right: 1px solid white;
	width: 24.9%;
	
}

li a{
	color: white;
	display: block;
	padding-top:10px;
	padding-bottom: 10px;
	text-align: center;
	text-decoration: none;
}	

li:last-child{
	width:25%;
	border-right: none;
}

li a:hover:not(.active) {
  background-color: orange;
}

.active{
	background-color: red;
}
footer{
			text-align: center;
			padding: 5px;
			color: white;
}

video{	
		width: 400px;
		height: 400px;
		margin-left:33%;
		margin-top:0.7%;
		border: 8px solid transparent;
		background: linear-gradient(70deg,  #ff0f7b 20%, #f89b29 100%);
}

h3{
	font-family:"Papyrus", Fantasy;
}
	
</style>
</head>
<body>
<ul>
<li><a href="dream_home.php">Home</a></li>
<li><a class="active" href="">Audio Visual Knowledge</a></li>
<li><a href="dream_theory.php">Theoretical Knowledge</a></li>
<li><a href="dream_aboutUs.php">About Us</a></li>
</ul>
<h3 align="center">Introduction to JAVA</h3>
<video controls>
<source src="Java_Intro.mp4" type="video/mp4">
</video>
<h3 align="center">PHP and MySQL Web Application</h3>
<video controls>
<source src="Php_MySql.mp4" type="video/mp4">
</video>
<h3 align="center">Operating Systems</h3>
<video controls>
<source src="OperatingSystem_Concept.mp4" type="video/mp4">
</video>
<h3 align="center">Database Management</h3>
<video controls>
<source src="Database_Management.mp4" type="video/mp4">
</video>
<footer>
<p>COPYRIGHTS &#169 RESERVED 2021-<br>
<p>PPVC_4 TECH TEAM</p>
</footer>
</body>
</html>
