<?php
$db = include 'database/start.php';
include 'functions.php';
include 'components/ImageHandler.php';
include 'components/Validate.php';

$img = new ImageHandler($db);
$valid = new Validate();

$valid->valid($_POST["title"], "text", "Строка должна быть длиннее");
$valid->valid($_POST["email"], "email", "Неверный формат E-mail");

if (!$valid->getErr()) {

    $id = $db->create('posts', [
        "title" => $_POST["title"],
        "email" => $_POST["email"],
    ]);

    $img->save("posts", $id, $_FILES["image"]);

    header('Location: /index.php');
} else {
    header('Location: /create.php');
}
