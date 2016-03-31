<?php 

$ac=fopen("ac.txt", "a");
if(!$ac)
{
	echo "dosya acilmadi";
}
$deger="yunus onal\n";
fwrite($ac,$deger);
fclose($ac);



 ?>