<?php

/**
* 
*/
class AuthController
{
	
	function loginProcess($un, $pw)
	{
		try {
			include_once 'class/connectionClass.php';
		  	$data = $conn->query("SELECT * From users WHERE username='$un' AND password='$pw'")->fetchAll();
		  	$rows[] = "";
			foreach ($data as $row) {
			    $rows[] = $row;
			}
			return json_encode($rows);
	    }
		catch(PDOException $e)
	    {
	    return "Connection failed: " . $e->getMessage();
	    }
		
	}

	function forgotpassValidation($reqID)
	{

	}

	function updatePasswordProcess($id, $newpassword)
	{

	}

	function registerValidation($name, $username, $password, $email)
	{

	}
}
