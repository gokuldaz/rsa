<html>
<head>
<title>Encrypt</title>
<link rel="stylesheet" href="assets/css/main.css" />
<script src="assets/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(500).slideDown(750);
  });
});

function val()
{
	var e = document.getElementById("ek").value;
	var n = document.getElementById("n").value;
	
	if(e < 0)
	{
		alert('Please provide a valid encryption key!!!');
		document.getElementById("ek").focus();
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
</head>


<body>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
<center>
<br><br><br>
<h1> Encrypt a File</h1>
<br><br>
<form method="post" action="encryptCheck.php" enctype="multipart/form-data" onsubmit="return val()">
<b>Enter the Encryption Key : <input type="number" name ="ek" id="ek" autofocus required><br><br>
Enter the N value : <input type="number" name ="n" id="n" required><br><br>
<input type="file" name="file" required></b>
<br><br>
<p id="p1"></p>
<button type="submit" class="primary"><img src="icons/lock.png" height="75%"><font color="white" size="5">Now!!!</font></button>
<br><br><br>
<a href="index.php"><button  type="button"><img src="icons/home.png" height="75%"></button></a>

<center>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>

</html>
