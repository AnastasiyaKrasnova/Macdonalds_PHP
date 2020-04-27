<?php
require_once 'composer\vendor\autoload.php';
require_once 'PDO_database.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));
function Check_User_Data($data,$regexp,&$matches,&$res){
		$addr=htmlspecialchars($data);
		if (preg_match($regexp,$addr,$matches)){
			$res="Принято";
			return 1;
		}
		else{ 
			$res="Перепроверьте данные";
			return 0;
		}
}

function FormOrder($arr,$id){
	$data=array('id'=>$id,'capacity'=>$arr['total'],'price'=>$arr['sum'],'time'=>date("H:i:s"),'date'=>date("Y:m:d"));
	return $data;
}

function GetProductID($db,$request,$params,$field){
	$res=Selected_database_data($db,$request,$params);
	return $res[0][$field];
}

function GetOrderID($db,$request,$params,$field){
	$res=Selected_database_data_order($db,$request,$params);
	return $res[0][$field];
}

function Connect_Order_Menu($db,$order_id){
	for($i=0;$i<$_SESSION['counter'];$i++){
			$si=$_SESSION['item_' . $i];
			$product_id=GetProductID($db,"SELECT * FROM menuitems WHERE `name` = ? AND `price`=?",array($si['card_title'],$si['card_price']),'card_id');
			$data=array('productid'=>$product_id,'orderid'=>$order_id,'total'=>$si['card_num']);
			Request_in_database($db,"INSERT INTO `product_in_order` SET `productid` = :productid, `orderid` = :orderid, `total` = :total",$data);
		}
}

$flag=true;
$title="Все что мы хотим узнать про Вас";
session_start();

$regexp_adress='/^(г\.[ ]?)?([А-Я][-а-яА-Я]{1,20})[,; ]+(ул\.[ ]?)?([А-Я][-а-яА-Я.]+|([A-Z][-a-zA-Z.]+)([ ]+st\.)?)[,; ]+(дом[ ]+)?(\d{1,3}[-А-Яа-я]?)([,; ]+(кв\.[ ]*)?([\d]{1,4}))?$/u';
$matches_adress=array();
$res_adress=$_SESSION['adress'];
if (isset($_POST['client_adress'])){
	if (Check_User_Data($_POST['client_adress'],$regexp_adress,$matches_adress,$res_adress)){
		$_SESSION['adress']=$_POST['client_adress'];
	}
	else{ $flag=false;}	
}
else{$flag=false;}

$regexp_phone='/^(80(29|17)|\+375(29|33|44))[0-9]{7}$/u';
$matches_phone=array();
$res_phone=$_SESSION['phone'];
if (isset($_POST['client_phone'])){
	$st = preg_replace ("/[^0-9+]/","",$_POST['client_phone']);
	if (Check_User_Data($st,$regexp_phone,$matches_phone,$res_phone)){
		$_SESSION['phone']=$st;
	}
	else{ $flag=false;}	
}
else{$flag=false;}

$regexp_name='/^[-a-zA-Z.а-яА-я0-9]{1,20}$/u';
$matches_name=array();
$res_name=$_SESSION['name'];
if (isset($_POST['client_name'])){
	if (Check_User_Data($_POST['client_name'],$regexp_name,$matches_name,$res_name)){
		$_SESSION['name']=$_POST['client_name'];
	}
	else{ $flag=false;}	
}
else{$flag=false;}

if ($flag){
	if (count($matches_adress)<11){$flat="no";}
	else{$flat=$matches_adress[11];}
	$data=array('name' => $_SESSION['name'], 'phone' => $_SESSION['phone'],'city' =>$matches_adress[2] ,'street' => $matches_adress[4],'num' => $matches_adress[8],'flat' =>$flat);
	$customer=Selected_database_data_customer($db,"SELECT * FROM customers WHERE `nickname` =? AND `phone`=? AND `city`=? AND `street`=? AND `street_num`=? AND `flat`=?",array($data['name'],$data['phone'],$data['city'],$data['street'],$data['num'],$data['flat']));
	if (empty($customer)){
		$id_customer=Request_in_database($db,"INSERT INTO `customers` SET `nickname` = :name, `phone` = :phone, `city` = :city, `street` = :street, `street_num` = :num, `flat` = :flat",$data);
		$data=FormOrder($_SESSION,$id_customer);
		$id_order=Request_in_database($db,"INSERT INTO `orders` SET `customerid` = :id, `capacity` = :capacity, `price` = :price, `date` = :date, `time` = :time",$data);
		Connect_Order_Menu($db,$id_order);
	}
	else{
		$data=FormOrder($_SESSION,$customer[0]['id']);
		Request_in_database($db,"UPDATE orders SET  capacity =?, price = ?, date = ?, time = ? WHERE customerid=?",array($data['capacity'],$data['price'],$data['date'],$data['time'],$data['id']));
		$id_order=GetOrderID($db,"SELECT * FROM orders WHERE `customerid` = ?",array($data['id']),'id');
		Request_in_database($db,"DELETE FROM product_in_order WHERE orderid=?",array($id_order));
		Connect_Order_Menu($db,$id_order);
	}
	$title="Ваш заказ успешно отправлен";
	
}
else{
	$title="Вы нам врете..Хавки не будет";
}



$twig->addGlobal('link_menu', "../Menu.php");
$twig->addGlobal('link_location', "../Location.php");
$twig->addGlobal('link_sales', "../Sales.php");
$twig->addGlobal('link_main', "../index.php");
$twig->addGlobal('res_adress',$res_adress);
$twig->addGlobal('res_phone',$res_phone);
$twig->addGlobal('res_name',$res_name);
$twig->addGlobal('title',$title);
$twig->addGlobal('cart_number', $_SESSION['total']);
echo $twig->render('Location.twig');

