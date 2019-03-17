<?php
    session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
</head>
<body>
    
    <a href="logout.php">LOGOUT</a>

    <h1> Welcome <?php echo $_SESSION['username'] ?></h1>

    <a href="tracker/index.php">Go to tracker</a>
</body>
</html>