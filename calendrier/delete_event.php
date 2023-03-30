<?php
$id = $_POST['id'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projetiscamen', 'root', '');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}
$sql = "DELETE from  fc_events_table WHERE id=" . $id;
$q = $bdd->prepare($sql);
$q->execute();
?>
