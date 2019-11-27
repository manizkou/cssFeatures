<?php
	// print_r(PDO::getAvailableDrivers());
	$servername = "localhost";
	$username = "root";
	$password = "";

	// try {
	// 	$conn = new PDO("mysql:host=$servername;dbname=manizkou", $username, $password);
	//     // set the PDO error mode to exception
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "Connected successfully";
	// }
	// catch(PDOException $e)
	// {
	// 	echo "Connection failed: " . $e->getMessage();
	// }

	try{
		$handler= new PDO("mysql:host=$servername;dbname=manizkou", $username, $password);
		$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo 'Connected succesfully';
	}catch(PDOException $e){
		// die('Sorry database error');
		echo "Connection failed: ".$e->getMessage();
	}

	

?>