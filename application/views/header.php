<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sample Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css" type="text/css" media="screen" />
	</head>
<body class="body">
	
	<header class="mainHeader">
		<img src="<?= base_url()?>assets/images/logo.gif">
		<nav><ul>
			<li class="<?= active_link('home', $this->router->fetch_class())?>"><a href="<?= site_url('home')?>">Home</a></li>
			<li class="<?= active_link('about', $this->router->fetch_class())?>"><a href="<?= site_url('about')?>">About</a></li>
			<li class="<?= active_link('contact', $this->router->fetch_class())?>"><a href="<?= site_url('contact')?>">Contact</a></li>
		</ul></nav>
	</header>
		
	<div class="mainContent">
	
		