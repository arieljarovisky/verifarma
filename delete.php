<?php

require('conexiondb.php');


$id = $_GET['id'];



$delete = "DELETE FROM `farmacia` WHERE `Id`=$id";
$query3 = $db->prepare($delete);
$query3->execute();
$data3 = $query3->fetchAll(PDO::FETCH_OBJ);
header('location:../../verifarma/index.php');
