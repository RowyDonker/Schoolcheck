<?php	
echo $id;

$sql = "UPDATE  Scholen SET schoolname='".$_POST['schoolname']."', adress='".$_POST['adress']."' WHERE id='".$id."'";

$result = $mysqli->query($sql);
?>