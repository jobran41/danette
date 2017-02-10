<?php 
//$config = @parse_ini_file('config.db.ini');
//print_r($config);
//streamerzapp
// password:dU}$5fhe,ITL
// User: streaapp_danettu
// Database: streaapp_danette

//danette hosting
// User: autourde_danettu
// Database: autourde_danette 
// passwd:wTEHx@B-~Q%6
	try{ 
		$pdo = new PDO('mysql:host=localhost;dbname=autourde_danette', 'autourde_danettu', 'wTEHx@B-~Q%6'); 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
                echo 'erreur db';  
		echo $e->getMessage();
		die($e);
	}
?>