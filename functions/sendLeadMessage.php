<?php
require "../globals/database.php";
$db = Database::getInstance();

$message = $db->escape($_GET['message']);
$name = $db->escape($_GET['name']);
$lastname = $db->escape($_GET['lastname']);
$id_user = $db->escape($_GET['id_user']);
$id_lead = $db->escape($_GET['id_lead']);
$img = $db->escape($_GET['img']);

$db->query("INSERT INTO `messages`(`text`, `id_user`, `id_lead`, `img`, `name`, `lastname`) VALUES ('$message','$id_user','$id_lead','$img','$name','$lastname')");
?>