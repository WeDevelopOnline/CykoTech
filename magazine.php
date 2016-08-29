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


<section id="intro" style="padding-top:100px;" >
        <div class="container">
            
                <div class="col-sm-12">
                    <h1 align="center" style="color:#ff6d06">Get Our Latest Magazines Here..</h1>
                    
                </div>
				</div>
				
				
                    
				<div >	
<?php include_once "dbconfig.php";
								$query="SELECT * FROM `news` ORDER BY sno DESC; ";
						
								$rs=my_select($query);
								
								$a=1;
								while($row=mysqli_fetch_array($rs))
								{
									echo "<div class='jumbotron container'> <h2 align='center' style='color:#898989'>$row[1]</h1>";
									echo '<p style="padding:10px;"><img class="img-responsive" style="float:left; padding:30px; max-height:300px" src="data:image;base64,'.base64_encode($row['image']) .'">';
									echo "$row[2]<br/>&nbsp;";
									
									
									$down=$row[3];
									if ($down==NULL)
										echo"";
									else
									echo "<br/><font face='Arial' size='2'><a class='btn btn-warning btn-lg' href='$down'>Click Here To Download</a></font></p></div>";
									$a++;
									
								}
								
?>
         
            </div>
        </div>
    </section>


<hr width="90%" style="height: 5px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="60%" style="height: 3px;color: #123455;background-color: #ff6d06;border: none;" />
			<hr width="25%" style="height: 2px;color: #123455;background-color: #ff6d06;border: none;" />
<div class="container" style="padding:10px;" id='special_features'></div>
</body>
</html>