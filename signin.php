<?php
session_start();

if (isset($_SESSION['email'])) {
     header('location: index.php');
     die();
 };
 
 $error = '';
 //LOGIC/CONTROLLER
 if (count($_POST) > 0) {
    
     if (!isset($_POST['email'][0])) $error = 'You must enter your email';
     if (!isset($_POST['password'][0])) $error = 'You must enter your password';

     //correctness
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error = 'You must enter a valid email';
     if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) $error = 'You must enter a password between 8 and 16 characters';
 
     if (strlen($error) == 0) { 
        $user_id = 0;
         $fp = fopen('users.csv.php', 'r');
         while (!feof($fp)) {
             $line = fgets($fp);
             $line = explode(';', $line);
             if (count($line) == 2 && $_POST['email'] == $line[0] && password_verify($_POST['password'], trim($line[1]))) {
                 //echo 'Welcome to the website!';
                 fclose($fp);
                 $_SESSION['email'] = $line[0];
                 $_SESSION['user_id']=  $user_id;
                 header('Location: MusicPost/index.php');
                 die();
             }
            $user_id++;
         }
         fclose($fp);
         $error = 'Your credentials are wrong';
     }
 };

 /*require_once('Auth.php');

 $auth = new Auth();
 $auth->login();

 $error = $auth->getError();

 if(!empty($error)){
    echo "<p style='color:red;'>$error</p>";
 }*/ // This does not work, I tried. Currently in progress
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Sign In</h3>
                        <?php if (strlen($error) > 0){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error; ?>
                            </div>
                        <?php } ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </form>
                        <br />
                        <p>If you are new to our website, click here to <a href="signup.php" >Sign Up</a><p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>