<?php 
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
//echo date('d/m/Y H:i:s');
session_start();
//require 'mysql.class.php';
require_once 'database.php';
if(isset($_POST['ajax'])){ 	 
	if($_POST['ajax'] == "setToken"){  
		
		$sql = "select * from bin_users where cin='".$_POST['cin']."'";
			$query = $pdo->query($sql); 
                         //print_r($query);
			if($query->rowCount()<1){   
				$date_inscrit = date("Y-m-d");
				$sql = "insert into bin_users (nom,cin,user_id,date_inscrit,tel,email,niveau) values(".$pdo->quote($_POST['nom']).",".$pdo->quote($_POST['cin']).",".$pdo->quote($_POST['user_id']).",".$pdo->quote($date_inscrit).",".$pdo->quote($_POST['tel']).",".$pdo->quote($_POST['email']).",".$pdo->quote($_POST['niveau']).")";
				if ($pdo->query($sql)) { 
                                    echo 'true';
				} else {

					echo 'error';	
				}
			}else{
				echo 'cinexiste';
			}
	}
        if($_POST['ajax'] == "verif"){   
		
		$sql = "select niveau from bin_users where user_id='".$_POST['user_id']."'";  
			$query = $pdo->query($sql); 
                         //print_r($query);
               $sql2 = "select niveau from bin_users where user_id='".$_POST['user_id']."'";
               if($query->rowCount()>0){  
                   $tab=$query->fetchAll(PDO::FETCH_ASSOC);
                   $verifuser=$query->rowCount().$tab[0]['niveau'];
                   echo $verifuser; 
                 
               }
               else{ 
                   echo 00; 
               }
	}
        
        if($_POST['ajax'] == "video1"){ 
            if($_POST['calcul1']== "5"){ 
                $sql = "UPDATE  `bin_users` SET  `niveau` =  '1' WHERE user_id='".$_POST['user_id']."'";    
                $query = $pdo->query($sql);  
                echo 'true';
                
            }else{
               echo 'false'; 
            }
        }
        if($_POST['ajax'] == "video2"){    
            if($_POST['calcul2']== "111111111111111111111111"){    
                $sql = "UPDATE  `bin_users` SET  `niveau` =  '2' WHERE user_id='".$_POST['user_id']."'";    
                $query = $pdo->query($sql);  
                echo 'true';
                
            }else{
               echo 'false'; 
            }
        }
        
}
?>