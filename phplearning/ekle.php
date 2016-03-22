<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="icerik">

	<input type="submit" value="kaydet">

	
</form>

</body>
</html>

<?php 
//veri tabanını sayfaya çağırdık
include "db.php";
if ($db) 
{
	//sonucu yazdırdık.
	//echo "Basarili:";

	//Post edılen verı var mı?
	if (isset($_POST['icerik'])) {
		//postla gelen veriyi icerik degişkenine atadık.
		$icerik=$_POST["icerik"];

		//eger icerik varsa ekrana bas
		if ($icerik) {
			echo $icerik;
		}

		//aldığım veriyi veri tabanına kaydetme.
		$kaydet=$db->prepare('INSERT INTO yazilar (icerik) values (?)');
		$kaydet->execute(array($icerik));
	}

}else
{
	echo "veri tabanina baglanilamadi";
}



 ?>