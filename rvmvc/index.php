<?php
	require_once 'model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>

	<form action="controller.php" method="post">
		<table cellpadding="4" cellspacing="3">
			<tr>
				<th>Username :</th>
				<td><input type="text" name="username" value="" placeholder="Enter username"/></td>
			</tr>
			<tr>
				<th>Password :</th>
				<td><input type="password" name="password" value="" placeholder="Enter passwords"/></td>
			</tr>
			<tr>
				<th>Firstname :</th>
				<td><input type="firstname" name="firstname" value="" placeholder="Enter Firstname"></td>
			</tr>
			<tr>
				<th>lastnamre :</th>
				<td><input type="lastname" name="lastname" value="" placeholder="Enter Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="action" value="adduser"></td>
				<td><input type="reset" name="reset"></td>
			</tr>
		</table>
	</form>


		<?php
			$model = new model();

			$result = $model->select('user');
		 ?>
		 <?php if (!empty($result)): ?>
		 		<table border="1" cellspacing="0" cellpadding="3">
		 	<tr>
		 		<th>u_id</th>
		 		<th>username</th>
		 		<th>password</th>
		 		<th>firstname</th>
		 		<th>lastname</th>
		 		<th>Options</th>
		 	</tr>

		<?php foreach ($result as $user): ?>
			<tr>
				<td><?= $user['u_id'];?></td>
				<td><?= $user['username']; ?></td>
				<td><?= $user['password']; ?></td>
				<td><?= $user['firstname']; ?></td>
				<td><?= $user['lastname'];?></td>
				<td><a href="controller.php?action=delete&id=<?=$user['u_id'] ?>">Delete</a>
					<a href="index.php?id=<?= $user['u_id']?>">Edit</a>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
		<?php 	endif; ?>
</body>
</html>
