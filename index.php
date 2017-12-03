<?php 
			session_start();
			
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>My diary</title>
   </head>
   <body>
      <h1>
      	Witaj na aplikacji MyDiary <?php echo '</br>'.$_SESSION['username'].'</br>'.$_SESSION['password']?>
      </h1>
   </body>
</html>