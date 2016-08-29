<?php

include_once"dbconfig.php";

$query="SELECT * FROM `client` ORDER BY sno DESC;";


$rs=my_select($query);
								
								while($row=mysql_fetch_array($rs))
								{
									echo"$row['name']";
									echo '<img class="img-responsive"   src="data:image;base64,'.base64_encode($row['image']) .'">&emsp;';
									echo"hello";
								}
								


?>