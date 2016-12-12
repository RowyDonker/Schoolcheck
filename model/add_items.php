<?php
$schoolname=$_POST['schoolname'] ;
$adress= $_POST['adress'] ;					
$zipcode= $_POST['zipcode'] ;					
$district= $_POST['district'] ;					
$telnr= $_POST['telnr'] ;					
$email= $_POST['email'] ;					
$website= $_POST['website'] ;					
$openday= $_POST['openday'] ;					
$openclass= $_POST['openclass'] ;					
$infonight= $_POST['infonight'] ;					
$private= $_POST['private'] ;					
$concept= $_POST['concept'] ;					
$specials= $_POST['specials'] ;					
$tto= $_POST['tto'] ;					
$sports= $_POST['sports'] ;					
$tec= $_POST['tec'] ;				
$spanish= $_POST['spanish'] ;				
$vso= $_POST['vso'] ;				
$vmbob= $_POST['vmbob'] ;				
$vmbot= $_POST['vmbot'] ;				
$vmbok= $_POST['vmbok'] ;				
$havo= $_POST['havo'] ;				
$vwo= $_POST['vwo'] ;				
$gymnasium= $_POST['gymnasium'] ;				
$basis= $_POST['basis'] ;				
$art= $_POST['art'] ;

$sql_add = ("INSERT INTO Scholen (schoolname, adress, zipcode, district, telnr, email, website, openday, openclass, infonight, private, concept, specials, tto, sports, tec, spanish, vso, vmbob, vmbok, vmbot, havo, vwo, gymnasium, basis, art) 
VALUES('$schoolname','$adress','$zipcode','$district','$telnr','$email','$website','$openday','$openclass','$infonight','$private','$concept','$specials','$tto','$sports','$tec','$spanish','$vso','$vmbob','$vmbot','$vmbok','$havo','$vwo','$gymnasium','$basis','$art') "); 	
echo $sql_add;
        $mysqli->query($sql_add);
?>