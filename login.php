<?php include("./db/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WNSMS</title>
</head>

<body>
    <form action="./controllers/loginController.php" method="post">
        <input type="hidden" name="loginForm" />
        <div>
            <lable>Username</lable>
            <input type="text" name="username">
        </div>
        <div>
            <lable>Password</lable>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>

</html>