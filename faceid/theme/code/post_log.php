<?php
	session_start();
    //load file config
    include "control/config.php";
    //load model
    include "control/model.php";

    $model = new model();
    if(isset($_POST['maxid'])){
    	$maxid = $_POST['maxid'];
    	$rows = $model->fetch("SELECT image.id as idImage, image.time as time, image.b64Face as b64Face, person.id as idPerson, person.name as name, person.age as age, person.gender as gender, person.crimeLevel as crimeLevel FROM `image` JOIN person WHERE person.id = image.idPerson AND image.id >".$maxid." ORDER BY image.id ASC");
    	$arr = [];
    	foreach($rows as $row){
    		$tmp = array(
    			'idImage' => $row['idImage'],
    			'time' => $row['time'],
    			'b64Face' => $row['b64Face'],
    			'idPerson' => $row['idPerson'],
    			'name' => $row['name'],
    			'age' => $row['age'],
    			'gender' => $row['gender'],
    			'crimeLevel' => $row['crimeLevel']
    		);
    		$arr[] = $tmp;
    	}

    	$res = json_encode(array(
    		'status' => 200,
			'data' => $arr
		));
		echo $res;
    }
?>