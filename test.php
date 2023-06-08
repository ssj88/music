<?php

$python = "python";
$file = "C:\\xampp\\htdocs\\music\\test.py";
$out=exec($python . " " . $file);

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
$output = fread($myfile,filesize("out.txt"));
fclose($myfile);


header("location:list.php?emotion=$output")
?>