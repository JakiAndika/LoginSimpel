<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    //valid asi form login pengecekan manual
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin"){
        if(isset($_POST['remember'])) {
           setcookie("last_username", $username, time() + 3600 * 24); 
        }else {
            setcookie("last_username", "", time() - 1);
        }
        $_SESSION["username"] = $username;
        header("Location: home.php");
    }else{
        header("Location:login.php");
    }
    ?>
</body>
</html>