<?php

$mysqli = false;
function connectDB (){

global $mysqli;
$mysqli = new mysqli("mysql:host=localhost", "u949871590_ajuna", "QWXumaFkNGA2", "u949871590_ysusy");
$mysqli->query("SET NAMES 'utf8'");

}

function closeDB(){
global $mysqli;
$mysqli->close();

}


function NewBook($limit, $id) {
		global $mysqli;
		connectDB();
		if ($id)
			$where = "WHERE `id` = ".$id;
		$result=$mysqli->query("SELECT * FROM `books` $where ORDER BY  `id` DESC LIMIT $limit");
		closeDB();
		if (!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}
	function resultToArray($result){ 
		$array = array();
		while(($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
   }
?>