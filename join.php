<?php
if(isset($_POST['resume']))
					{
						$error=$_FILES['file']['error'];
						if($error!=0)
						{
						echo "<Br />A File not uploaded, server seems busy, try later";
						}
						else
						{
						$fname=$_FILES['file']['name'];
						$ftype=$_FILES['file']['type'];
						$fsize=$_FILES['file']['size'];
						$ftname=$_FILES['file']['tmp_name'];

						$target="resume/$fname";
							
						$ans=move_uploaded_file($ftname,$target);
						if($ans)
						{
						//save info to database
						$target=addslashes($target);
						$name=$_POST['name'];
						$email=$_POST['email'];
							$query="insert into resume (`filename`,`filetype`,`filesize`,`filepath`,`name`,`email`) values ('$fname','$ftype',$fsize,'$target','name','email')";
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
						
						
					}


?>
