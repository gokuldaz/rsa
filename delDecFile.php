<?php
$fileName = $_GET['name'];
$dir = "decFiles/";
$del = unlink($dir.$fileName);
if($del == True)
{
	echo "<script>window.location.href='listDecFiles.php'
	alert('Deleted Successfully!!!')
	</script>";
}
else
{
	echo "<script>window.location.href='listDecFiles.php'
	alert('Failed to delete!!!')
	</script>";
}
	
?>