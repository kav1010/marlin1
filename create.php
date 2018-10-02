<? session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <? if ($_SESSION["error"]): ?>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-warning" role="alert">
                    <?php
                    foreach ($_SESSION["error"] as $err) {
                        echo "<div>{$err}</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    <? endif; ?>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/store.php" method='POST' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name='title' class="form-control">
                    <label for="">E-mail</label>
                    <input type="text" name='email' class="form-control">
                    <label for="">Image</label>
                    <input type="file" name='image' class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
