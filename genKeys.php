<html>
<head>
<title>Generate Keys</title>
<link rel="stylesheet" href="assets/css/main.css" />
<script src="assets/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(500).slideDown(750);
  });
});
</script>


</head>

<body>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
			<br><br><br>
<center>
<h1>Generate Keys</h1><br><br>
<form action="genKeysCheck.php" method="post">
1st prime : <input type="number" name ="fn" id="fn" autofocus required><br><br>
2nd prime : <input type="number" name ="sn" id="sn" required>
<br><br><br>
<p id="p1"></p>
<button type="submit" class="primary"><font size="5">Generate </font><img src="icons/keys.png" height="80%"></button>

</form>
<br><br>
<center>
<a href="index.php"><button  type="button"><img src="icons/home.png" height="75%"></button></a>
</center>
</body>
</html>