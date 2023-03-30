<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <center>
            <h1>
                welcom <?php echo $_SESSION['login']?>
            </h1>
            <a href="logout.php">logout</a>
        </center>
    </div>
</body>
</html>