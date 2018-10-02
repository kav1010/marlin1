<?php

include 'functions.php';
include 'components/ImageHandler.php';
$db = include 'database/start.php';
$img = new ImageHandler($db);

$id = $_GET['id'];

$post = $db->getOne('posts', $_GET['id']);
$db->delete('posts', $_GET['id']);
$img->delete($post["image"]);

header('Location: /index.php');
