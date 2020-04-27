<?php
$mycards=array();
$db = new PDO('mysql:host=localhost;dbname=products', 'root', '2011NKrasA');
function All_database_data($db){
	try {
		$i=0;
		$data = $db->query("SELECT * FROM menuitems")->fetchAll(PDO::FETCH_ASSOC);
		foreach ($data as $v){
			$mycards[$i]=array('card_id' =>$v['id'],'card_title' =>$v['name'],'card_type' =>$v['type'],'card_price' =>$v['price'],'card_image' =>$v['image']);
			$i++;	
		}
		return $mycards;
	} 
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
}
function Selected_database_data(){
	try {
		$i=0;
		$db=func_get_arg(0);
		$request=func_get_arg(1);
		$params=func_get_arg(2);
		$stmt = $db->prepare($request);
		$stmt->execute($params);
		while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
			$res[$i]=array('card_id' =>$row->id,'card_title' =>$row->name,'card_type' =>$row->type,'card_price' =>$row->price,'card_image' =>$row->image);
			$i++;}
		if (isset($res)){return $res;}	
		else {return null;}
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
}
function Selected_database_data_customer(){
	try {
		$i=0;
		$db=func_get_arg(0);
		$request=func_get_arg(1);
		$params=func_get_arg(2);
		$stmt = $db->prepare($request);
		$stmt->execute($params);
		while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
			$res[$i]=array('id' =>$row->id,'nickname' =>$row->nickname,'phone' =>$row->phone,'city' =>$row->city,'street' =>$row->street,'num' =>$row->street_num,'flat' =>$row->flat);
			$i++;}
		if (isset($res)){return $res;}	
		else {return null;}
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
}

function Selected_database_data_order(){
	try {
		$i=0;
		$db=func_get_arg(0);
		$request=func_get_arg(1);
		$params=func_get_arg(2);
		$stmt = $db->prepare($request);
		$stmt->execute($params);
		while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
			$res[$i]=array('id' =>$row->id,'capacity' =>$row->capacity,'price' =>$row->price,'customerid' =>$row->customerid,'date' =>$row->date,'time' =>$row->time);
			$i++;}
		if (isset($res)){return $res;}	
		else {return null;}
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
}

function Request_in_database(){
	try{
		$db=func_get_arg(0);
		$request=func_get_arg(1);
		$params=func_get_arg(2);
		$sth = $db->prepare($request);
		$sth->execute($params);
		$insert_id = $db->lastInsertId();
		return $insert_id;
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
}



