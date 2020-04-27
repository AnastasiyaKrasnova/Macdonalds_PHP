<?php
require_once 'composer\vendor\autoload.php';
require_once 'PDO_database.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
	$_SESSION['total'] = 0;
	$_SESSION['sum']=0;
	$_SESSION['adress']="Введите ваш адрес";
	$_SESSION['phone']="Введите ваш телефон";
	$_SESSION['name']="Введите ваш псевдоним";
	
}
$mycards=All_database_data($db);
$twig->addGlobal('link_menu', "../Menu.php");
$twig->addGlobal('link_location', "../Location.php");
$twig->addGlobal('link_sales', "../Sales.php");
$twig->addGlobal('link_main', "../index.php");
$twig->addGlobal('cart_number', $_SESSION['total']);
echo $twig->render('main.twig',array('mycards' => $mycards));
