<?php
    session_start();
    $last_username = "";
    if(isset($_COOKIE['last_username'])) {
        $last_username = $_COOKIE['last_username'];
    }
    if(isset($_SESSION['username'])) {
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <form action="validasi.php" method="POST">
        <p>
            <label for="">Username</label>
            <input type="name" name="username" value="<?php echo $last_username; ?>">
        </p>
        <p>
            <label for="">Password</label>
            <input type="password" name="password">
        </p>
        <p>
            <input type="checkbox" name="remember">Remember me?
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
</body>
</html>