<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logged in.css">
    <title>Logged In</title>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname;

    $pdo = new PDO('mysql:host=localhost;dbname=loginsystem;charset=utf8', 'root', '');

    $sql = "SELECT firstname, lastname from users where username = '$username' and password = '$password' ";
    $data = $pdo->query($sql);

    if ($world = $data->fetchObject()) {
        echo "<h1> Welcome "; 
        echo $world->firstname . " ";
        echo $world->lastname;
    }else{
        echo "<h1> Something is wrong</h1>";
    }
    
    ?>
</body>
</html>