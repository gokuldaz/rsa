<html>
<head>
<title>Decrypt Files</title>
<script src="assets/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(500).slideDown(750);
  });
});
</script>

<link rel="stylesheet" href="assets/css/main.css" />

<?php
$output = shell_exec("python showDecFiles.py");

$fileList = explode (",", $output);

$count = sizeof($fileList);
if(ctype_space($fileList[0]) ==1)
{
	echo "<script>window.location.href='index.php'
	alert('No files found!!!')
	</script>";
	
}

?>
</head>

<body>
<center>
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
			
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Decrypted Files</h2>
							</header>
							
<table>
<thead>
<tr>
	<th>File</th>
	<th>Created Date</th>
</tr>
</thead>
<tbody>
<?php

for ($i = 0; $i<$count; $i++)
{
	if (file_exists("decFiles/".$fileList[$i]))
	{
		$date = date ("Y-m-d H:i.", filectime("decFiles/".$fileList[$i]));
		$cdate = date('F d Y H:i:a',strtotime('+4 hour +30 minutes',strtotime($date)));
		
	}
	

	if($i ==$count-1)
	{
		$string = $fileList[$i];
		$fn = substr($string, 0, -1);
		substr($string, 0, -1);
		if (file_exists("decFiles/".$fn))
		{
			$cdate = date ("Y-m-d H:i.", filectime("decFiles/".$fn));

		}

		$cdate = date('F d Y h:i:a',strtotime('+4 hour +30 minutes',strtotime($cdate)));
	}
	
	
	
	?>
	<tr><td><font size="5"><a href="decOpen.php?name=<?php echo "decFiles/".$fileList[$i]; ?>"><?php echo $fileList[$i]; ?></a></font></td><td><?php echo $cdate; ?></td><td><a href="decOpen.php?name=<?php echo "decFiles/".$fileList[$i]; ?>"><img src="icons/view.png" height="30"></a></td> <h4><td><a href="delDecFile.php?name=<?php echo $fileList[$i]; ?>"><img src="icons/trash.png" height="20"></a></td></h4></tr>
	<?php
}

?>
</table>
<a href="decrypt.php"><img src="icons/back.png" height="50"></a><br><br>
<a href="index.php"><button type="button"><img src="icons/home.png" height="75%"></button></a>
			
			