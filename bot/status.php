<?php
include "../config/connection.php";
try {
	$db = new PDO("mysql:host=gdps_kaserine;dbname=gdps_kaserine", gdps_kaserine, B2kL372IpG5e8ehUC9lLdd);
	//works fine
	exit("1");
	} catch (PDOException $e){
		//connection db error
		exit("2");
		}
