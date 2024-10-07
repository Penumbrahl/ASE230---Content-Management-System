<?php
// SIGNUP
session_start();
$error = '';
// LOGIC/CONTROLLER
if (count($_POST) > 0) {
    if (!isset($_POST['email'][0])) $error = 'You must enter your email';
    if (!isset($_POST['password'][0])) $error = 'You must enter your password';
    if (!isset($_POST['password_confirm'][0])) $error = 'You must confirm your password';

    // Correctness
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error = 'You must enter a valid email';
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) $error = 'Password must be between 8 and 16 characters';
    if ($_POST['password'] != $_POST['password_confirm']) $error = 'Passwords must match';

    if (strlen($error) == 0) {
        $fp = fopen('users.csv.php', 'r');
        while (!feof($fp)) {
            $line = fgets($fp);
            $line = explode(';', $line);
            if (count($line) == 2 && $_POST['email'] == $line[0]) {
                $error = 'The email is already registered';
                break;
            }
        }
        fclose($fp);
        if (strlen($error) == 0) {
            // Open CSV file in append mode
            $fp = fopen('users.csv.php', 'a+');
            // Write new credentials
            fputs($fp, $_POST['email'] . ';' . password_hash($_POST['password'], PASSWORD_DEFAULT) . PHP_EOL);
            // Close the file
            fclose($fp);
            header('Location: index.php');
            die();
        }
    }
}

// VIEW
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Sign Up</h3>
                        <?php if (strlen($error) > 0): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirm" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirm" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
