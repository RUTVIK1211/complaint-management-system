<?php
/**
 * connection to the database  or model
 */
require_once 'config.php';
class dbconnection
{
	public function getconnection()
	{
		$con = mysqli_connect(HOST,USER,PASS,DATABASE);
		return $con;
	}
	public function getpdoconnection()
	{
		try
		{

			$con = new PDO('mysql:host='. HOST. ';dbname='.DATABASE,USER,PASS);
			$con->SetAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
			return $con;
		}
		catch(PDOException $e)
		{
			echo 'Error :'. $e->getMessage();
		}

	}
}
 ?>
