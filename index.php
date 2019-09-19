<?php 
$id = intval($_GET['id']);
if ($id >= 1 && $id <= 1998) {
	$pic = "1998.png";

}elseif ($id >= 1999 && $id <= 2009) {
	$pic = "1999.png";

}elseif ($id >= 2010 && $id <= 2012) {
	$pic = "2010.png";

}elseif ($id >= 2013 && $id <= 2014){
	$pic = "2013.png";
	
}else {
$pic = "2015.png";
}

elseif{

	echo "V tomto roce nenastala žádná změna. <br> Možné Roky: 1998, 1999, 2010, 2013, 2015.";
	$pic = "";
}


echo " <img src=" .$pic. "> ";


 ?>


