<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
    <title>Home Page</title>
</head>
<body>
     
    <h1> Welcome <?php echo $_SESSION['username'] ?></h1>
    <div class="main-menu">
        <a href="login.php">Login in to access tracker</a>

        <a href="logout.php">LOGOUT</a>
    </div>
</body>
</html>