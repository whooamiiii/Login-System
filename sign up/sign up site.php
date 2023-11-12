<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sign up/sign up site.css">
    <title>Sign up</title>
</head>
<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form action="" method="post">
            <div class="text">
                <input type="text" name="firstname" required>
                <span></span>
                <label >First Name</label>
            </div>
            <div class="text">
                <input type="text"  name="lastname" required>
                <span></span>
                <label >Last Name</label>
            </div>
            <div class="text">
                <input type="text"  name="username" required>
                <span></span>
                <label >Username</label>
            </div>
            <div class="text">
                <input type="email"  name="e-mail" required>
                <span></span>
                <label >E-Mail</label>
            </div>
            <div class="text">
                <input type="number"  name="number" required>
                <span></span>
                <label >Phone Number</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label >Password</label>
            </div>
            <div class="text">
                <input type="password" name="repeatpassword" required>
                <span></span>
                <label >Repeat Password</label>
            </div>
            <input type="submit" value="Sign Up">
            <div class="sign-up">
                Already a member? <a href="../login/login-site.php">Log-in</a>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['password']) or isset($_POST['repeatpassword'])){
            $firstname = $_POST['firstname'];
            $lastname  = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['e-mail'];
            $phonenumber = $_POST['number'];
            $password = $_POST['password'];
            $repeatpassword = $_POST['repeatpassword'];

            $pdo = new PDO('mysql:host=localhost;dbname=loginsystem;charset=utf8', 'root', '');

            $sql1 = "SELECT * from users where username = '$username'";
            $check = $pdo->query($sql1);

            if($check->rowCount() != 0){
                include_once '../sign up/sign up username taken.php';
            }else{
                $sql = "Insert into users (Firstname , Lastname, username, phonenumber, email, password)
                values ('$firstname', '$lastname','$username','$phonenumber','$email','$password')";
                $insert = $pdo->query($sql);

                if($repeatpassword != $password){
                    echo "Password doesn't match";
                }else{
                    header("Location: ../login/login-site.php");
                    exit();
                }
            }
        }
    ?>
</body>
</html>