<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=products', 'root', '2011NKrasA');
  $mycards=array();
	$i=0;
	$type =$_GET["types"]??"";
	if(!empty($_GET["types"])) { $type="Garneers"; }	
	$stmt = $db->prepare("SELECT * FROM menuitems WHERE `type` = ?");
	$stmt->execute([$type]);
	while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
		$mycards[$i]=array('card_id' =>$row->id,'card_title' =>$row->name,'card_type' =>$row->type,'card_price' =>$row->price,'card_image' =>$row->image);
		$i++;
	}
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}
?>