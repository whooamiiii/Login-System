<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot pass.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="center">
        <h1>Forgot Password?</h1>
        <form action="" method="post">
            <h2>Enter the right data associated with your account</h2>
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
            <input type="submit" value="Reset Password">
        </form>
    </div>

    <?php 
    
        if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['username']) and isset($_POST['e-mail']) and isset($_POST['number'])){
            $firstname = $_POST['firstname'];
            $lastname  = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['e-mail'];
            $phonenumber = $_POST['number'];
            
            $pdo = new PDO('mysql:host=localhost;dbname=loginsystem;charset=utf8', 'root', '');

            $sql = "SELECT firstname, lastname, username, email, phonenumber from users where firstname = 
            '$firstname' and lastname = '$lastname' and username = '$username' and email ='$email' and phonenumber = '$phonenumber'";
            $insert = $pdo->query($sql);

            if($world=$insert->fetchObject()){
                header("Location: ../password/reset pass.php");
                exit();
            }else{
            echo "some of your data isn't right"; 
            }
        }
        
    ?>
</body>
</html>