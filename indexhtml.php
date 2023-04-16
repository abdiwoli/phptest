<!DOCTYPE html>
<html>
   <body>
        <caption> sign up form</caption>
	    <form name ="form" action ="index.php?id=1" method="post">
		    name<br>
		    <input type ="text" name ="name"><br>
			email<br>
			<input type ="email" name ="email"><br>
			username<br>
			<input type ="text" name ="username"><br>
			password<br>
			<input type ="password" name ="password"><br>
		    <input type = "submit">
		
		</form>
		<?php
		   echo  $_GET["message"];
		   $url = $_GET["url"];
		   
		   echo "<br><a href=$url>click here to sign in </a>";
		?>
   </body>
</html>