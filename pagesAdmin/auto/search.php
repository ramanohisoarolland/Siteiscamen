<?php
$term=$_GET['term'];
$con=new PDO ('mysql:host=localhost; dbname=projetiscamen','root', '');
$sql="SELECT name FROM data WHERE name like '%$term%'";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fecthAll(PDO::FETCH_ASSOC);
$data= array();
foreach ($arr as $key => $val) {
    $data[]=$val['name'];
}
echo json_encode($data);
?>