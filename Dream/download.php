<?php
if($_GET['file1']=='Java_The_Complete_Reference_Eleventh_Edi')
{
$file1=$_GET['file1'].".pdf";
header("content-disposition: attachment; filename=".urlencode($file1));

$read1= fopen($file1, "r");
while (!feof($read1))
 {
	echo fread($read1,8192);
	flush();
}
		fclose($read1);
}
else if($_GET['file2']=='PHP')
{
$file2=$_GET['file2'].".pdf";
header("content-disposition: attachment; filename=".urlencode($file2));

		$read2= fopen($file2, "r");
		while (!feof($read2))
 		{
			echo fread($read2,8192);
			flush();
		}
		fclose($read2);
}

else if($_GET['file3']=='Silberschatz')
{
$file3=$_GET['file3'].".pdf";
header("content-disposition: attachment; filename=".urlencode($file3));

		$read3= fopen($file3, "r");
		while (!feof($read3))
 		{
			echo fread($read3,8192);
			flush();
		}
		fclose($read3);
}

else if($_GET['file4']=='DATABASE MANAGEMENT SYSTEMS')
{
$file4=$_GET['file4'].".pdf";
header("content-disposition: attachment; filename=".urlencode($file4));

		$read4= fopen($file4, "r");
		while (!feof($read4))
 		{
			echo fread($read4,8192);
			flush();
		}
		fclose($read4);
}
?>