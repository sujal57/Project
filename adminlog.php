<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="csslogin.css">
</head>
<body>

    <form action="adminverify.php" method="post">
        <div class="heading">
            <h3>Admin</h3>
            <p>Login in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Your username
            <input type="email" placeholder="Enter Username" name="aname" required>

            <br><br>
            Your password
            <input type="password" placeholder="Enter Password" name="pwd" required>

            <div class="Container2">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p class="fpwd"> <a href="#">Forgot Password?</a></p>
            </div>

            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="reg">Not a member?  <a href="#">Register here!</a></p>

        </div>

    </form>
</body>
</html>
