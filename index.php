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
			// $c=mysqli_connect('localhost', 'user07', 'Password01','db07');
			// mysqli_query($c, 'set names utf8');
			// $qr = mysqli_query($c, 'select Theme from foxs_posts where id=3;');
			// $qr = mysqli_fetch_assoc($qr);
			// foreach($qr as $k=>$v){
			//
			//  	echo $v;
			//
			// };
<html>
