<?php
$fileName = $_GET['name'];
$dir = "encFiles/";
$del = unlink($dir.$fileName);
if($del == True)
{
	echo "<script>window.location.href='decrypt.php'
	alert('Deleted Successfully!!!')
	</script>";
}
else
{
	echo "<script>window.location.href='decrypt.php'
	alert('Failed to delete!!!')
	</script>";
}
	
?>