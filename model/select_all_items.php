<?php

$sql = 'SELECT * FROM Scholen';
$result = $mysqli->query($sql);
$result = convertResultToArray($result);

?>