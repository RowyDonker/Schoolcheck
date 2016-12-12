<?php
$sql = "SELECT * FROM Scholen WHERE id= " . $id;

$result = $mysqli->query($sql);
$result= convertResultToArray($result);
?>