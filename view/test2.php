<?php
require_once '../model/connection.php';

$datas = $database->select("users_db", [ "email" ]);
foreach($datas as $data){
	echo $data['email'];
}
