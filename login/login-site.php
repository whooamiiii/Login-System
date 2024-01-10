<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/login-site.css">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="logged in.php" method="post">
            <div class="text">
                <input type="text" name="username" required>
                <span></span>
                <label >Username</label>
            </div>
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label >Password</label>
            </div>
            <div class="pass"><a href="../password/forgot pass.php">Forgot Password?</a></div>
            <input type="submit" value="Login">
            <div class="sign-up">
                No account? <a href="../sign up/sign up site.php">Sign-Up</a>
            </div>
        </form>
    </div>
</body>
</html>