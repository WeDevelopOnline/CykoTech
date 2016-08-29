<?php

session_start();
include_once "dbconfig.php";
if(!verifyuser())
{
echo"<h1 align='center'>YOU DO NOT HAVE THE PERMISSION TO VIEW THIS PAGE.</h1>";
die();
}
else
	$sun=fetchusername();
	$loginmessage="<li><a href='logout.php'>Logout</a></li>";
	
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
					<?php echo"$loginmessage";?>
			
				</ul></strong>
			
			</div>
		</div>
</nav>

		<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Resumes Submitted</h2>
			<?php 
								$query="SELECT * FROM `resume` ORDER BY `sno` DESC;";
								
								$rs=my_select($query);
								
								while($row=mysqli_fetch_array($rs))
								{
									echo"<span style='color:#ff6d06'>$row[4]</span> &emsp;";
									echo"$row[5] &emsp;";
									echo"<a href='$row[3]'>Download Resume</a><br/>";
								}
			?>
								
		</div>
		</div>
		
		
		
		
		<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Insert Into Work Gallary</h2>
			<form role="form" id="footer-form" method="POST" enctype="multipart/form-data">
									<div class="form-group has-feedback">
										<label class="sr-only" >WORK TITLE</label>
										<input type="text" class="form-control" id="head" placeholder="WORK TITLE" name="head" required>
										<i class="fa fa-star form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >WORK CONTENT</label>
										<textarea class="form-control" rows="8" id="body" placeholder="WORK CONTENT" name="body" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Select Image If Any</label>
										<input type="file" name="image" id="image" title="Choose Image File Only">
										<i class="glyphicon glyphicon-picture "></i>
									</div>
									
									<input type="submit" name="submit" id="submit" value="Send" class="btn btn-default">
								</form>
		</div>
		</div>
		
		
	<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Insert Into Workshop & Internship</h2>
			<form role="form" id="footer-form" method="POST" enctype="multipart/form-data">
									<div class="form-group has-feedback">
										<label class="sr-only" >Workshop & Internship TITLE</label>
										<input type="text" class="form-control" id="head" placeholder="Workshop & Internship TITLE" name="head" required>
										<i class="fa fa-star form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Workshop & Internship CONTENT</label>
										<textarea class="form-control" rows="8" id="body" placeholder="Workshop & Internship CONTENT" name="body" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Select Image If Any</label>
										<input type="file" name="image" id="image" title="Choose Image File Only">
										<i class="glyphicon glyphicon-picture "></i>
									</div>
									
									<input type="submit" name="submit2" id="submit2" value="Send" class="btn btn-default">
								</form>
		</div>
		</div>
		
		
		<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Insert Into Client</h2>
			<form role="form" id="footer-form" method="POST" enctype="multipart/form-data">
									<div class="form-group has-feedback">
										<label class="sr-only" >Client TITLE</label>
										<input type="text" class="form-control" id="head" placeholder="Client TITLE" name="head" required>
										<i class="fa fa-star form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Client CONTENT</label>
										<textarea class="form-control" rows="8" id="body" placeholder="Client CONTENT" name="body" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Select Image If Any</label>
										<input type="file" name="image" id="image" title="Choose Image File Only">
										<i class="glyphicon glyphicon-picture "></i>
									</div>
									
									<input type="submit" name="submit3" id="submit3" value="Send" class="btn btn-default">
								</form>
		</div>
		</div>
		
		
		
		<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Insert Into Partners</h2>
			<form role="form" id="footer-form" method="POST" enctype="multipart/form-data">
									<div class="form-group has-feedback">
										<label class="sr-only" >Partners TITLE</label>
										<input type="text" class="form-control" id="head" placeholder="Partners TITLE" name="head" required>
										<i class="fa fa-star form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Partners CONTENT</label>
										<textarea class="form-control" rows="8" id="body" placeholder="Partners CONTENT" name="body" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Select Image If Any</label>
										<input type="file" name="image" id="image" title="Choose Image File Only">
										<i class="glyphicon glyphicon-picture "></i>
									</div>
									
									<input type="submit" name="submit4" id="submit4" value="Send" class="btn btn-default">
								</form>
		</div>
		</div>
		
		
		<div class="jumbotron " align="center" style="padding-top:150px;">
		<div class="container">
		<h2 align="center">Insert Into Media</h2>
			<form role="form" id="footer-form" method="POST" enctype="multipart/form-data">
									<div class="form-group has-feedback">
										<label class="sr-only" >Media TITLE</label>
										<input type="text" class="form-control" id="head" placeholder="Media TITLE" name="head" required>
										<i class="fa fa-star form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Media CONTENT</label>
										<textarea class="form-control" rows="8" id="body" placeholder="Media CONTENT" name="body" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" >Select Image If Any</label>
										<input type="file" name="image" id="image" title="Choose Image File Only">
										<i class="glyphicon glyphicon-picture "></i>
									</div>
									
									<input type="submit" name="submit5" id="submit5" value="Send" class="btn btn-default">
								</form>
		</div>
		</div>
		
		
		<div class="jumbotron " align="center" style="margin-top:150px;">
		<div class="container">
		
		<div class="jumbotron container" style="background:transparent">
		<h1 align="center">Upload Magazine</h1>
	<form method="POST" enctype='multipart/form-data'>
	<div class="row">
	<div class="col-sm-4" align="center">
	<label>Enter Title of Magazine</label>
	</div>
	<div class="col-sm-6" align="center">
	<input type="text" class="form-control" id="date" name="date" placeholder="Eg: Rock India"  required="required" />
	</div>
	
	<div class="row">
	<div class="col-sm-4" align="center">
	<label>Enter Details</label>
	</div>
	<div class="col-sm-6" align="center">
	<textarea class="form-control" rows="8" id="news" placeholder="Eg: This magazine is a mirror to the upcoming ROCKING INDIA" name="news" required></textarea>
	</div>
	<div class="row">
	<div class="col-sm-4" align="center">
	<label>Select Magazine</label>
	</div>
	<div class="col-sm-6" align="center">
	<input type='file' name='myfile' id='myfile' />
	</div>
	</div>
	<div class="col-sm-4" align="center">
	<label>Select Magazine Cover</label>
	</div>
	<div class="col-sm-6" align="center">
	<input type="file" name="image" id="image" title="Choose Image File Only">
	</div>
	<div class="row">
	<div class="col-sm-12" align="center">
	<input type="submit" class="btn btn-default" id="submitn" name="submitn" value="Submit" align="center"/>
	</div>
	</div>
</div></div></div>
</form>
<?php
include_once"dbconfig.php";
if(isset($_POST['submitn']))
					{
						$error=$_FILES['myfile']['error'];
						if($error!=0)
						{
						echo "<Br />A File not uploaded, server seems busy, try later";
						}
						else
						{
						$fname=$_FILES['myfile']['name'];
						$ftype=$_FILES['myfile']['type'];
						$fsize=$_FILES['myfile']['size'];
						$ftname=$_FILES['myfile']['tmp_name'];

						$target="photo/$fname";
							
						$ans=move_uploaded_file($ftname,$target);
						if($ans)
						{
						//save info to database
						$target=addslashes($target);
							$query="INSERT INTO `up_fs` (`filename`,`filetype`,`filesize`,`filepath`) values ('$fname','$ftype',$fsize,'$target')";
							$n=my_iud($query);
							if($n==1)
							{
								echo "<script> alert('File upload successful')</script>";
							}
							else
							{
						echo "<script> alert('SOMETHING WENT WRONG ... TRY AGIN IN A LITTLT BIT')</script>";
							}
						}
						else
						{
						echo "<script> alert('SOMETHING WENT WRONG ... TRY AGIN IN A LITTLT BIT')</script>";
						}
						
						}
						$date=$_POST['date'];
						$news=$_POST['news'];
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
						
						$query="INSERT INTO `news`( `date`, `news`, `target`,`image`) VALUES ('$date','$news','$target','$filedata');";
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('NEWS details have been updated..!')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
					}


?>
		
		</div>
		</div>
		
		<?php
		
		if(isset($_POST['submit2']))
					{
						$head=$_POST['head'];
						$body=$_POST['body'];
						
						
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
											
						
						$query="INSERT INTO `workshop`( `title`, `image`, `description`) VALUES ('$head','$filedata','$body');";
						
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('BLOG SUBMITTED SUCCESSFULLY')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
		
					}else if(isset($_POST['submit']))
					{
						$head=$_POST['head'];
						$body=$_POST['body'];
						
						
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
											
						
						$query="INSERT INTO `gallery`( `title`, `image`, `description`) VALUES ('$head','$filedata','$body');";
						
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('BLOG SUBMITTED SUCCESSFULLY')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
		
					}else if(isset($_POST['submit3']))
					{
						$head=$_POST['head'];
						$body=$_POST['body'];
						
						
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
											
						
						$query="INSERT INTO `client`( `title`, `image`, `description`) VALUES ('$head','$filedata','$body');";
						
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('BLOG SUBMITTED SUCCESSFULLY')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
		
					}else if(isset($_POST['submit5']))
					{
						$head=$_POST['head'];
						$body=$_POST['body'];
						
						
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
											
						
						$query="INSERT INTO `media`( `title`, `image`, `description`) VALUES ('$head','$filedata','$body');";
						
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('BLOG SUBMITTED SUCCESSFULLY')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
		
					}else if(isset($_POST['submit4']))
					{
						$head=$_POST['head'];
						$body=$_POST['body'];
						
						
						$fsize=$_FILES['image']['size'];
						$image=$_FILES['image']['tmp_name'];

						$fp=fopen($image,'r');
						$filedata=fread($fp,$fsize);
							

						$filedata=addslashes($filedata);
											
						
						$query="INSERT INTO `partner`( `title`, `image`, `description`) VALUES ('$head','$filedata','$body');";
						
						$n=my_iud($query);
						
						if($n)
							echo"<script> alert('BLOG SUBMITTED SUCCESSFULLY')</script>";
						else
							echo"<script> alert('Something went wrong please try again :( ..!')</script>";
		
					}
		
		
		
		
		?>
		
		
		
		
		
<hr width="90%" style="height: 5px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="60%" style="height: 3px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="25%" style="height: 2px;color: #123455;background-color: #ff6d06;border: none;" />
<div class="container" style="padding:10px;" id='special_features'></div>
</body>
</html>