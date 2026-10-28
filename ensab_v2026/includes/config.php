<?php 
	 define( '', 'http://localhost/ensab/ensab_v2026/&error=Could%20not%20open%20connection%20to%20database%20server.%20Please%20check%20your%20configuration'); 
	 define( 'ENCRYPTION_KEY', '398e7a494ecedc0b88a37a99900118df'); 
 
	 $db_hostname = "localhost"; 
	 $db_userdata = "root"; 
	 $db_password = ""; 
	 $db_dataname = "ensab"; 
	 $INSTALL = true; 
 
	 try { 
	 $db=new mysqli("$db_hostname","$db_userdata","$db_password"); 
	$db->select_db("$db_dataname");	 $connect =  new PDO("mysql:host=$db_hostname; dbname=$db_dataname", $db_userdata,$db_password); 
	 } 
 
	 catch (PDOException $e) { 
	 if ($INSTALL == false) { 
	 include 'installation/index.php'; 
	 die(); 
	 } else { 
	 die("Database Exception, contact le webmaster"); } 
	 } 
 
	 $connect->query("set names'utf8' "); 
 
?>