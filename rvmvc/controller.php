<?php
	require_once 'model.php';

	$action = $_REQUEST['action'];
	unset($_REQUEST['action']);
	$model = new model();

	switch ($action)

	{
		case 'adduser':case 'update':
			if ($_REQUEST['u_id']!='')
			{
				$result = $model->update('user',$_REQUEST,"id = '".$_REQUEST['u_id']."'");
			}
			else
			{
				$result = $model->insert('user',$_REQUEST);
			}
			header("location: index.php");
		break;


		case 'delete':
		$id = $_REQUEST['id'];
		$result = $model->delete('user',"u_id = $id");
		header("location: index.php");
		break;
	}
 ?>
