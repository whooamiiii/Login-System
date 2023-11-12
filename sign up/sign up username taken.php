<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign up username taken.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="center">
        <h1>Username is already taken</h1>
        <form action="../login/login-site.php" method="post">
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
                <input type="text"  name="username" class="username" required>
                <span class="username-span"></span>
                <label class="label-username">Username</label>
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
</body>
</html>