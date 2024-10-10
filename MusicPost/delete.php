<?php
session_start();
if(!isset($_SESSION['email'])){
    echo '<h2>You are not signed in. Click here to <a href="../signin.php" >Sign In</a></h2>';
     die();
}

$i=$_GET['index'];
$string = file_get_contents('../posts.json');
$php_array = json_decode($string, true);
$blogs = $php_array;
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Delete Post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">GrooveNest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../signout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Delete post content-->
        <div class="container mt-5">
            <h1>Delete this Post?</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php if (empty($blogs)){?>
                        <div class="alert alert-warning">No posts available to delete.</div>
                    <?php }else{ ?>
                        <ul class="list-group">
                            <?php foreach ($blogs as $index => $blog){ ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        <strong><?= $blog['title'] ?></strong> by <?= $blog['author'] ?> (<?= $blog['date'] ?>)
                                    </span>
                                    <form method="POST" style="display:inline;">
                                        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <br />
                    <button type="button" class="btn btn-secondary">
                        <a style="text-decoration: none; color: white;" href="index.php">Return To Home</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>