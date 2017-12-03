<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>My diary</title>
   </head>
   <body>
      <h1>
      	Witaj na aplikacji MyDiary drogi <?php echo '</br>'.$model->getUserName().'</br>'.$model->getPassword().'</br>'?>
      	Wybierz sobie kolor: 
      	<form action="color.php" method="GET">
      		<input type="color" name="color" value=<?php echo $model->getColor() ?>>
      		<input type="submit" value="Change color">
      	</form>
      </h1>
   </body>
</html>