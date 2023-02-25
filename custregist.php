<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="custregist.css">
</head>

<body>

    <form action="custinsertdata.php" method="post">
        <div class="heading">
            <h3>Customer Registration</h3>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Name:
            <input type="text" placeholder="Enter your name" name="cname" required>

            <br><br>
            <label class="cust">Contact Number:</label>
            <input type="number" placeholder="Enter your number" name="cno" required>

            <br><br>
            <label class="cust">Birthdate:</label>
            <input type="date" placeholder="Enter your Birthdate" name="cbdate" required>

            <br><br>
            City
            <input type="text" placeholder="Enter your city" name="c_city" required>

            <br><br>
            Your username
            <input type="email" placeholder="Enter Username" name="cid" required>

            <br><br>
            Your password
            <input type="password" placeholder="Enter Password" name="pwd" required>


            <br><br>
            <!-- <div class="add"> -->
                Address:
                <textarea name="cadd" placeholder="Enter your Address"></textarea>
            <!-- </div> -->
	
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>
</html>
