<?php

session_start();
include_once "dbconfig.php";
if(verifyuser())
{
echo"<h1 align='center'>You Cannot View This Page</h1>";
die();
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>CykoTechnology Pvt. Ltd..</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta content="Keywords">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="js/custom.js"></script>
<script src="//fast.eager.io/rKpakg0erB.js"></script>
</head>
<body style="overflow-x:hidden;">
<div style="max-width:100%;">
<nav class="navbar-inverse navbar navbar-fixed-top " style="opacity:1" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a href="http://www.cykotech.in" ><img style="padding:20px; max-width:250px;" class="img-responsive" src="images/logo.png" alt="cykotech logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar"><strong>
				<ul class="nav navbar-nav navbar-right" style="padding:15px;">
			
					<li ><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Work Gallery</a></li>
					<li><a href="internship.php">Internship</a></li>
					<li><a href="client_page.php">Clients</a></li>
					<li><a href="partner_page.php">Partners</a></li>
					<li><a href="media_page.php">Media</a></li>
			
				</ul></strong>
			
			</div>
		</div>
</nav>




<div class="jumbotron container" style="background:transparent;">
			
				<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
		<div class="jumbotron">LOGIN FOR ADMIN</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            User ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="User ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm" name="login" id="login">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>

			
			</div>
			
			<?php

include_once"dbconfig.php";
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(isset($_POST['rem']))
		$rem='yes';
	else
		$rem='no';
	$query="select count(*) from login where username='$username' and password='$password'";
	$n=my_one($query);
if($n!=1)
	{
		//echo"Error in login";
	echo("<script> location.href='login.php'</script>");
	}
	else
	{
	$_SESSION['sun']=$username;
	$_SESSION['spwd']=$password;
		if($rem=='yes')
			{
			setcookie('cun',$username,time()+60*60*24*7);
			setcookie('cpwd',$password,time()+60*60*24*7);
			}
echo("<script> location.href='admin_workarea.php'</script>");
	}
}
?>	
			
			
<hr width="90%" style="height: 5px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="60%" style="height: 3px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="25%" style="height: 2px;color: #123455;background-color: #ff6d06;border: none;" />
<div class="container" style="padding:10px;" id='special_features'></div>
</body>
</html>