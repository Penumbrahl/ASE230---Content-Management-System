<?php
<?php
session_start();

// Create the main post page, this will include a comment section, but it should only be accessible to users, I (landen) can
// work with the PHP to get this to work correctly and ensure that only users can access the blog pages.
    $i=$_GET['post_id'];    
    require_once('json_function.php');
    require_once('visitor_function.php');
   
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$blogs[$i]['title'].' by '.$blogs[$i]['author']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    
    <body>
    <div class="container">
        <div>
            <h1><?=$blogs[$i]['title']?></h1>
            <h3><?='by: '.$blogs[$i]['author']?></h3>
            <h4><?='Posted on: '.$blogs[$i]['date']?></h4>
            <p><?=$blogs[$i]['content']?></p>
            <p><strong>Visitor Count: <?=$visit_count?></strong></p>
            <button type="button" class="btn btn-light"><a style="text-decoration: none" href="index.php">Return To Home</a></button>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>