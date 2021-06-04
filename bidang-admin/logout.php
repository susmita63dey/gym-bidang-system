<?php
include 'php/dbconfig.php';

if($_SESSION['user_session']!="")
{
	$admin->redirect('../index.php?link=000');
}
if(isset($_GET['logout']) && $_GET['logout']=="true")
{
	$admin->logout();
	$admin->redirect('index.php');
}
if(!isset($_SESSION['user_session']))
{
	$admin->redirect('index.php');
}
?>