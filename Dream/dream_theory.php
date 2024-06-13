<!DOCTYPE html>
<html>
<head>
<title>Dream Theoretical Knowledge</title>
<style>
body{
	background-image: url('lib_img1.jpg');
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
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

.right
{
    margin-left: 25%;
}

.box
{
    width: 60%;
    height: 60%;
    background: #fff;
    margin: 1%;
    font-family: "Papyrus", Fantasy;
    border: 8px solid transparent;
    background: linear-gradient(70deg,  #ff0f7b 20%, #f89b29 100%);
	float: left;
}
img
{
      border-radius: 10%;
      padding: 1px;
      border: 8px solid transparent;
      
}

li a:hover:not(.active) {
  background-color: orange;
}

.active{
	background-color: red;
}
footer {
	padding-top: 85%;
	text-align: center;
	color: white;
}

h1{
	color:white;
	 font-family: "Papyrus", Fantasy;
}

h3{
	color:white;
	 font-family: "Papyrus", Fantasy;
}

</style>
</head>
<body>
  <ul>
<li><a href="dream_home.php">Home</a></li>
<li><a href="dream_video.php">Audio Visual Knowledge</a></li>
<li><a class="active" href="">Theoretical Knowledge</a></li>
<li><a href="dream_aboutUs.php">About Us</a></li>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript">
    $(document).on('click','ul li',function(){
        $(this).addClass('active').siblings().removeClass('active')
    })
</script>
</ul>
<h1 align="center">Books-Definitive Edition</h1>
<div class="right">
  <div class="box">
  	 <img src="java.png"  align="left"width="200" height="200">
	   <h3>Java The Complete Reference-Eleventh Edition</h3>
    <h3><a href="Java_The_Complete_Reference_Eleventh_Edi.pdf" target="_blank">To View Book</a></h3>
    <h3><a href="download.php?file1=Java_The_Complete_Reference_Eleventh_Edi">To Download direct</a></h3><br>
</div>
</div>
<div class="right">
  <div class="box">
  	 <img src="phpsql.png"  align="left"width="200" height="200">
	  <h3>PHP and MySQL Web Development-Fourth Edition</h3>
	<h3><a href="PHP.pdf" target="_blank">To View Book</a></h3>
    <h3><a href="download.php?file2=PHP">To Download direct</a></h3><br>
</div>
</div>
<div class="right">
  <div class="box">
  	 <img src="os.png"  align="left"width="200" height="200">
	  <h3>Operating Systems Concept-<br>Ninth Edition</h3>
<h3><a href="Silberschatz.pdf" target="_blank">To View Book</a></h3>
    <h3><a href="download.php?file3=Silberschatz">To Download direct</a></h3><br>
</div>
</div>
<div class="right">
  <div class="box">
  	 <img src="dbms.png"  align="left"width="200" height="200">
	  <h3>Database Management-<br>Thirteenth Edition</h3>
   <h3><a href="DATABASE MANAGEMENT SYSTEMS.pdf" target="_blank">To View Book</a></h3>
    <h3><a href="download.php?file4=DATABASE MANAGEMENT SYSTEMS">To Download direct</a></h3><br>
</div>
</div>
<footer>
<p>COPYRIGHTS &#169 RESERVED 2021-<br>
<p>PPVC_4 TECH TEAM</p>
</footer>
</body>
</html>