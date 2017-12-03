
<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>My diary</title>
   </head>
   <body>
     	
   <form action="register.php" autocomplete="off" method="post">
   		<div>
			<label>Username:<input type="text" name="username" value=<?php echo $model->getUserName()?>></label>
			<div>
				<?php echo implode('<br/>',$model->getError('username')) ?>
			</div>
		</div>
		<div>
			<label>Name:<input type="text" autocomplete="off" name="name" value=<?php echo $model->getName() ?>></label> 
			<div>
				<?php echo implode('<br/>',$model->getError('name')) ?>
			</div>
		</div>
		<div>
			<label>Password:<input type="password" autocomplete="off" name="password" value=<?php echo $model->getPassword() ?>></label>
			<div>
				<?php echo implode('<br/>',$model->getError('password')) ?>
			</div>
		</div>
		<div>
			<label>Email:<input type="email" name="email" value=<?php echo $model->getEmail() ?>></label>
			<div>
				<?php echo implode('<br/>',$model->getError('email')) ?>
			</div>
		</div>
		<div>
			<label>Frameworks: 
				<select name="frameworks">
					<option value="programming">React</option>
					<option value="sport">Angular</option>
					<option value="vue">Vue</option>			
				</select>
			</label>
		</div>
		<div>
			<label> Hobbys :
					<input type="radio" name="programming" value="Programming">
					<input type="radio" name="sport" value="Sport">
					<input type="radio" name="cooking" value="Cooking">
			</label>
		</div>
		<input type="hidden">
		<div>
			<input type="submit" value="Register">
		</div>
	</form>
   </body>
</html>