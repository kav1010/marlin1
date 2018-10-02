<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Marlin Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">MainPage</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="/create.php" class="btn btn-success">Add Post</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <th scope="row"><?= $post['id']; ?></th>
                        <td>
                            <a href="/show.php?id=<?= $post['id']; ?>">
                                <?= $post['title']; ?>
                            </a>
                        </td>
                        <td>
                            <? if ($post['email']): ?>
                                <?= $post['email']; ?>
                            <? else: ?>
                                -
                            <? endif; ?>
                        </td>
                        <td>
                            <? if ($post['image']): ?>
                                <img src="uploads/<?= $post['image'] ?>" alt="" width="100px;" height="100px;">
                            <? else: ?>
                                -
                            <? endif; ?>
                        </td>
                        <td>
                            <a href="/edit.php?id=<?= $post['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete.php?id=<?= $post['id']; ?>" class="btn btn-danger"
                               onclick="return confirm('are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
