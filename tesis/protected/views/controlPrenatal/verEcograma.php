<?php


header('Content-type: '.$mime); 
$filename =$path;
//header('Content-Disposition: attachment;filename="archivo.pdf');
       
$fh=fopen($filename,"r") or die ("can't open file");

$contents = fread($fh, filesize($filename));
fclose($fh);

echo $contents; 
yii::app()->end();
?>
