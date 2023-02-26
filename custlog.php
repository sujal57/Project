<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="csslogin.css">
</head>
<body>

    <form action="retrive.php" method="post">
        <div class="heading">
            <h3>Customer</h3>
            <p>Login in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Your username
            <input type="email" placeholder="Enter Username" name="cname" required>

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
            <p class="reg">Not a member?  <a href="custregist.php">Register here!</a></p>

        </div>

    </form>
</body>
</html>
