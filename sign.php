<!DOCTYPE html>
<html>
   <body>
        <caption> sign in </caption>
	    <form name ="form" action ="index.php?id=0" method="post">
			username<br>
			<input type ="text" name ="username"><br>
			password<br>
			<input type ="password" name ="password"><br>
		    <input type = "submit">
		
		</form>
		<?php
		     if(empty( $_GET['message'] )){
				echo 'emty';
			 }
			 else{
				 echo $_GET['message'];
			 }
		?>
   </body>
</html>