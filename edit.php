<?php
include 'functions.php';
$db = include 'database/start.php';

$id = $_GET['id'];
$post = $db->getOne('posts', $id);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=<?= $post['id']; ?>" method='POST'>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name='title' class="form-control" value="<?= $post['title'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
