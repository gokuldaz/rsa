<?php
$ek = $_POST['ek'];
$n = $_POST['n'];
$filename=$_FILES['file']['name'];
//echo $filename;

$contents = file_get_contents( $filename );
$stripped = preg_replace('/\s/', '', $contents);

$output = shell_exec("python encrypt.py $ek $n $stripped");
echo($output);

?>