<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>My diary</title>
   </head>
   <body>
   	<h1>You've been successfully registered! 
   		<?php echo preg_replace_callback('/([a-z])/',
   		function($matches){ 
   			return strtoupper($matches[0]);
   	}, $model->getName(), 1)?> </h1>
   		<div>
			Username: <?php echo $model->getUserName()?>
		</div>
		<div>
			Name: <?php echo $model->getName() ?>
		<div>
			Password: <?php echo $model->getPassword() ?>
		</div>
		<div>
			Email: <?php echo $model->getEmail() ?>
		</div>
		<div>
			Frameworks: 
		</div>
		<div>
			Hobbys :	
		</div>
   </body>
</html>