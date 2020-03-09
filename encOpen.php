<html>
<head>
<title>Open</title>
<script src="assets/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(500).slideDown(750);
  });
});

function align()
{
  document.querySelector('p').classList.toggle('ow');
}
</script>

<link rel="stylesheet" href="assets/css/main.css" />
<style>
p {
  margin: 0 auto;
  max-width: 1000px;
  border: solid 2px #ccc;
  padding: 15px;
  align-content: left;
}
.ow {
  overflow-wrap: break-word;
  word-wrap: break-word;
  hyphens: auto;
}


</style>
</head>

<body onload="align()">
<center>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
			
			<br><br>			
			<font size="10"> <?php echo $_GET['name'];?></font>

			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
					
					<font size="20"><p align="left">
					<?php
							$file = $_GET['name'];
							echo file_get_contents( $file );
					?></p></font>
					</div>
					<a href="decrypt.php"><img src="icons/back.png" height="50"></a><br><br>
					<a href="index.php"><button  type="button"><img src="icons/home.png" height="75%"></button></a>

</div>
</section>
					



</body>
</html>