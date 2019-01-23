<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/head.css">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>	
</head>

		<body>
<?php
  include 'header.php';

    // if ($_GET["name"]=="moonlite")
    // { include 'profile.php';}
    // else {
    //   include 'content.php';
    // }

	    switch ($_GET["name"]) {
	    case moonlite:
	        include 'profile.php';
	        break;
	    default:
	        include 'content.php';
	        break;
}
?>

    <body>
<html>
