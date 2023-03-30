<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include('../config.php');

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM auth WHERE id ='$id'";
    $query_run = mysqli_query($conn,$query);

    foreach ($query_run as $row) {
        ?><form action="action.php" method="post">
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input type="text" name="username" value="<?php echo $row['username'];?>">
            </div>
            <div>
                <input type="text" name="email" value="<?php echo $row['email'];?>">
            </div>
            </form>
        <?php
    }
    ?>
    <?php 
}
?>
</body>
</html>