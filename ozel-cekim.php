<?php 
session_start();
ob_start();

require_once 'nedmin/netting/class.crud.php';
$db=new crud();

//1.Kullanım:
// $sql=$db->read("settings");
// $row=$sql->fetchAll(PDO::FETCH_ASSOC);

//2.Özel Kullanım:
$sql=$db->qSql("SELECT * FROM settings");

$row=$sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($row as $key) {
	$settings[$key['settings_key']]=$key['settings_value'];
}


$hak=$db->qSql("SELECT * FROM abouts");

$hakı=$hak->fetchAll(PDO::FETCH_ASSOC);

foreach ($hakı as $about) {
	$abouts[$about['abouts_key']]=$about['abouts_content'];
}



?>