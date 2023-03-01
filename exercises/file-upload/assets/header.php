<?php 
	ob_start(); 
	include_once 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $pageTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="styles/style.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>