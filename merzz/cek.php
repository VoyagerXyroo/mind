<?php
$id = $_POST['id'];
$bannedid1 = "123";
$bannedid2 = "12";

$daftar_id_dilarang = array();

$daftar_id_dilarang[] = $bannedid1;
$daftar_id_dilarang[] = $bannedid2;

array_push($daftar_id_dilarang, $bannedid1, $bannedid2);

$daftar_id_dilarang = [$bannedid1, $bannedid2];

print_r($daftar_id_dilarang);
