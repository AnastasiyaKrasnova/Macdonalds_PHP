<?php
require_once 'composer\vendor\autoload.php';
require_once 'PDO_database.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));
	session_start();
	$type=implode(",",$_REQUEST);
	if ($type==""){
		$name="All items";
		$mycards=All_database_data($db);
	}
	else{
		$name="$type";
		$mycards=Selected_database_data($db,"SELECT * FROM menuitems WHERE `type` = ?",array($type));	
	}
$twig->addGlobal('link_menu', "../Menu.php");
$twig->addGlobal('link_location', "../Location.php");
$twig->addGlobal('link_sales', "../Sales.php");
$twig->addGlobal('link_main', "../index.php");
$twig->addGlobal('menu_header',$name);
$twig->addGlobal('cart_number', $_SESSION['total']);
echo $twig->render('Menu.twig',array('mycards' => $mycards));