<html>
<head>
<title>Decrypt</title>
<link rel="stylesheet" href="assets/css/main.css" />
<?php
$output = shell_exec("python showEncFiles.py");

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
<header id="header">
				<a class="logo" href="index.php">HOMEPAGE</a>
				
			</header>
			<center>
<br><br><br>
<h1> Decrypt Files</h1>

			
<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Select a file to Decrypt</h2>
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
	
	if (file_exists("encFiles/".$fileList[$i]))
	{
		$cdate = date ("Y-m-d H:i.", filectime("encFiles/".$fileList[$i]));
		$cdate = date('F d Y h:i:a',strtotime('+4 hour +30 minutes',strtotime($cdate)));
		
	}

	

	if($i ==$count-1)
	{
		$string = $fileList[$i];
		$fn = substr($string, 0, -1);
		substr($string, 0, -1);
		if (file_exists("encFiles/".$fn))
		{
			$cdate = date ("Y-m-d H:i.", filectime("encFiles/".$fn));
			$cdate = date('F d Y h:i:a',strtotime('+4 hour +30 minutes',strtotime($cdate)));

		}

		
	}
	
	
	?>
	<tr><td><font size="5"><b><a href="decryptFile.php?name=<?php echo $fileList[$i]; ?>"><?php echo $fileList[$i]; ?></a></b></font></td><td><?php echo $cdate; ?></td><td><a href="encOpen.php?name=<?php echo "encFiles/".$fileList[$i]; ?>"><img src="icons/view.png" height="30"></a></td> <h4><td><a href="delEncFile.php?name=<?php echo $fileList[$i]; ?>"><img src="icons/trash.png" height="20"></a></td></h4></tr>
	<?php
}

?>
</tbody>
</table>
<a href="index.php"><button type="button"><img src="icons/home.png" height="75%"></button></a>
</div>
<a href="listDecFiles.php" >Show Decrypted Files</a>
</div>
</section>
</center>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>

</html>