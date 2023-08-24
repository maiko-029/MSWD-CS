<?php
require_once("dbcontroller.php");
$dbhandler = new DBController();

if($_SERVER['REQUEST_METHOD']=='GET'){

	switch ($_GET['whatToFetch']) {
		case 'client':
			$sql = "SELECT * FROM client";
     		$result=$dbhandler->runQuery($sql);
			echo json_encode($result);
			break;
	}

}