<?php
// List of events
$json = array();

// Query that retrieves events
$request = "SELECT * FROM  fc_events_table ORDER BY id";

// connection to the database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projetiscamen', 'root', '');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}
// Execute the query
$result = $bdd->query($request) or die(print_r($bdd->errorInfo()));

// sending the encoded result to success page
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>
