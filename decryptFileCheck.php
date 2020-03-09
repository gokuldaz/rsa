<?php
$dk = $_POST['dk'];
$n = $_POST['n'];
$filename=$_POST['fileName'];

$output = shell_exec("python decrypt.py $dk $n $filename");
echo $output;
?>