<?php
	
	$conn=mysqli_connect("localhost", "root", "root", "complain");
			// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//------------functions
		function generateTempName($id)
		{
			echo "id".$id;
			$result = mysqli_query($GLOBALS["conn"],"SELECT * FROM temporary_name");
			$rows = mysqli_num_rows($result);

			$name_id=rand(1,$rows);

			$sql="SELECT temp_name from temporary_name where id =".$name_id;
			$result = mysqli_query($GLOBALS["conn"], $sql);

				if (mysqli_num_rows($result) >0) 
				{
					$temp_name= $result->fetch_row();
					print_r($temp_name);
					$temp_name=$temp_name[0].strval($id);
	        		echo "temp_name =".$temp_name;

	        		$sql = "UPDATE student SET temp_name = '".$temp_name."' WHERE stud_no = ".$id;
	        		$conn=$GLOBALS["conn"];
	        		if ($conn->query($sql) === TRUE) 
					{
						echo "done";
						header("location:home.php");
					}
	        	}else 
	        	{
	            	echo "0 results";
	        	}
		}

		$action=$_REQUEST["action"];
		if ($action == "register" || $action == "update") {
			$enroll=$_POST["enroll"];
			$password = $_POST["password"];
			$name = $_POST["name"];
			$sem = $_POST["sem"];
			$dept = $_POST["dept"];
			$contact = $_POST["contact"];
			$email = $_POST["email"];
			$counter = 0;
			$flag =0;
			if ($action == "register") {
				
				$sql = "INSERT INTO student (enroll, password, name, sem, dept, contact, email, counter, flag) VALUES ('".$enroll."', '".$password."', '".$name."', '".$sem."', '".$dept."', '".$contact."', '".$email."', '".$counter."', '".$flag."')";

				if (mysqli_query($conn, $sql)) {
					$id = mysqli_insert_id($conn);
					echo "New record created successfully. Last inserted ID is: " . $id;
					$temp_name = generateTempName($id);
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}

		
	}
?>