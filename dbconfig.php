<?php
//modular approach for db handling
$dbserver="127.0.0.1";
$dbuser="root";
$dbpwd="";
$dbname="cykotech";

function my_iud($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysqli_select_db($cid, $dbname);
mysqli_query($cid, $query);
$n=mysqli_affected_rows($cid);
mysqli_close($cid);
return $n;
}


function my_select($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysqli_select_db($cid,$dbname);
$rs=mysqli_query($cid,$query);
mysqli_close($cid);
return $rs;
}

//select queries which return only a single value
function my_one($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysqli_select_db($cid, $dbname);
$rs=mysqli_query($cid, $query);
$row=mysqli_fetch_array($rs);
mysqli_close($cid);
return $row[0];
}

function verifyuser()
{
$u="";
$p="";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u=$_COOKIE['cun'];
$p=$_COOKIE['cpwd'];
}
else
if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
{
$u=$_SESSION['sun'];
$p=$_SESSION['spwd'];
}
$query="select count(*) from login where username='$u' and password='$p' ";
$n=my_one($query);
	if($n==1)
	return true;
	else
	return false;
	}


function fetchusername()
{
$u="";
$p="";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u=$_COOKIE['cun'];
$p=$_COOKIE['cpwd'];
}
else
if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
{
$u=$_SESSION['sun'];
$p=$_SESSION['spwd'];
}
$query="select count(*) from login where username='$u' and password='$p' ";
$n=my_one($query);
	if($n==1)
	return $u;
	else
	return false;
	}

	


?>