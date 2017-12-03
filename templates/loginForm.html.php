<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>My diary</title>
   </head>
   <body>
   <form action="login.php" autocomplete="off" method="post">
   		<div>
			<label>Username:<input type="text" name="username" value=<?php echo $model->getUserName()?>></label>
			<div>
				<?php echo implode('<br/>', $model->getError('username')) ?>
			</div>
		</div>
		<div>
			<label>Password:<input type="password" autocomplete="off" name="password" value=<?php echo $model->getPassword() ?>></label>
			<div>
				<?php echo implode('<br/>',$model->getError('password')) ?>
			</div>
		</div>
		<input type="hidden">
		<div>
			<input type="submit" value="Log in">
		</div>
		<div>
			<?php echo implode('<br/>',$model->getError('login')) ?>
		</div>
	</form>
   </body>
</html>