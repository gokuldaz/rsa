<html>
<head>
<title>Generate Keys</title>
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/alert/css/alertify.css" />
<link rel="stylesheet" href="assets/alert/css/alertify.min.css" />
<link rel="stylesheet" href="assets/alert/css/alertify.rtl.css" />
<link rel="stylesheet" href="assets/alert/css/alertify.rtl.min.css" />


<?php

$fn = $_POST['fn'];
$sn = $_POST['sn'];

$output = shell_exec("python genKeys.py $fn $sn");

//echo ($output)
$str_arr = explode (",", $output);
if(sizeof($str_arr)==1)
{
	$msg = $str_arr[0];
	
}
else
{
	$e = $str_arr[0];
	$d = $str_arr[1];
	$n = $str_arr[2];
}

?>
</head>

<body>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
<center>
<?php
if(isset($e) && isset($d))
{
	
	echo "<script>alert('Keys Generated!!! Please keep it in a safe place!!!')</script>";
	?>
<br><br>
	
	<h1>Keys Generated!!!</h1>

	<br><br>
	
	<h3>Please Note the keys...</h3>
	<br>

	<h2>Encryption Key is &nbsp; <b><font color="red"><?php echo $e;?></font></b></h2>
	<h2>Decryption Key is &nbsp; <b><font color="red"><?php echo $d;?></font></b></h2>

	<h2>N =<b><font color="blue"><?php echo $n;?></font></b></h2>

	


	<a href="index.php"><button type="button"><img src="icons/home.png" height="75%"></button></a>
	<br><br><br>
	<a href="genKeys.php">Generate <img src="icons/keys.png" height="30"> Again</a><br><br><br>
	<?php
}
else
{
	?>
	<br><br><br>
	<h1><b><font color="red">Failed</font></b> to generate <img src="icons/keys.png" height="50"><br><br></h1>
	<h2>Provided numbers are <font color="red">Not Prime!!!</font> Please try again with 2 Prime numbers...<h2>
	<br><br>
	<a href="genKeys.php" ><font color="blue">Click here to</font> <font color="red">try again...</font></a><br><br><br>
	<a href="index.php"><button type="button"><img src="icons/home.png" height="75%"></button></a>
	<?php
}
?>
</center>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/alert/alertify.js"></script>
			<script src="assets/alert/alertify.min.js"></script>
			
</body>
</html>