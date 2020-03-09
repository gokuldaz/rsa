<html>
<head>
<title>Decrypt</title>
<script src="assets/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
	
		$("#p1").css("color", "red").slideUp(500).slideDown(750);
	
  });
});

function val()
{
	var d = document.getElementById("dk").value;
	var n = document.getElementById("n").value;
	
	if(d < 0)
	{
		alert('Please provide a valid decryption key!!!');
		document.getElementById("dk").focus();
		return false;
	}
	else if(n < 0)
	{
		alert('Please provide a valid n value!!!');
		document.getElementById("n").focus();
		return false;
	}
	else
		return true;
	
	
}


</script>
<link rel="stylesheet" href="assets/css/main.css" />
<?php
$fileName = $_GET['name'];

?>
</head>
<body>
<center>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
<br><br><br>			
			<h1> Decrypt Files</h1>

			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
	
<form method="post" action="decryptFileCheck.php" onsubmit="return val()">
<b>Enter the Decryption Key : <input type="number" name ="dk" id="dk" autofocus required><br><br>
Enter the N value : <input type="number" name ="n" id="n" required><br><br>
<input type="hidden" name="fileName" value="<?php echo $fileName; ?>"></b>
<br>
<p id="p1"></p>
<button type="submit" class="primary"><img src="icons/unlock.png" height="80%"><font color="white" size="5">Now!!!</font></button>

<br><br><br>
<a href="decrypt.php"><img src="icons/back.png" height="50"></a><br><br>

<a href="index.php"><button  type="button"><img src="icons/home.png" height="75%"></button></a>
<br>


</body>

</html>
