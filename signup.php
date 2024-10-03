<?php
// SIGNUP

session_start();
$error = '';
// LOGIC/CONTROLLER
if (count($_POST) > 0) {

    if (!isset($_POST['email'][0])) $error = 'you must enter your email';
    if (!isset($_POST['password'][0])) $error = 'you must enter your password';
    if (!isset($_POST['password_confirm'][0])) $error = 'you must enter your password';

    //correctness
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error = 'you must enter a valid email';
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) $error = 'you must enter a password between 8 and 16 characters';

    if ($_POST['password'] != $_POST['password_confirm']) $error = 'passwords must match';

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
            //open csv file in append mode
            $fp = fopen('users.csv.php', 'a+');
            //write new credentials
            fputs($fp, $_POST['email'] . ';' . password_hash($_POST['password'], PASSWORD_DEFAULT) . PHP_EOL);
            //close the file
            fclose($fp);
            header('Location: signin.php');
            die();
        }
    }
};

//VIEW
?>

<html>

<head>
</head>

<body>
    <?php if (strlen($error) > 0) echo $error; ?>
    <form method="POST">
        <label>Email</label><br />
        <input type="email" name="email" required />
        <br /><br />
        <label>Password</label><br />
        <input type="password" name="password" required /> <br /><br />
        <label>Confirm Password</label><br />
        <input type="password" name="password_confirm" required /> <br /><br />
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>