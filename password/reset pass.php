<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset pass.css">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Reset your Password</h1>
        <form action="" method="post">
            <div class="text">
                <input type="text"  name="username" required>
                <span></span>
                <label >Username</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label >New Password</label>
            </div>
            <div class="text">
                <input type="password" name="resetpassword" required>
                <span></span>
                <label >Repeat New Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
    <?php 
    
    if(isset($_POST['password']) and isset($_POST['resetpassword'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $resetpassword = $_POST['resetpassword'];

        $pdo = new PDO('mysql:host=localhost;dbname=loginsystem;charset=utf8', 'root', '');
        $sql = "UPDATE users 
        set password = '$password' 
        where username = '$username' ";
        $index = $pdo->query($sql);

        
            if($password == $resetpassword){
                header("Location: ../login/login-site.php");
                exit();
            }else{ 
                echo "<div class='pass'><a href='forgot pass.php'>Forgot Password?</a></div>";
            }
        }
    ?>

</div>
</body>
</html>