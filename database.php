<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$query ="SELECT* FROM `menuitems`";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
	$mycards=array();
	$i=0;
	while ($row = mysqli_fetch_row($result)) {
				$mycards[$i]=array('card_id' => $row[0],'card_title' => $row[1],'card_type' =>$row[2],'card_price' =>$row[3],'card_image' =>$row[4]);
				echo "$row[0]\n";
				$i++;
	}
    mysqli_free_result($result);
}
?>