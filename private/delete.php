<?php
$id=$_GET['id'];
require_once 'db.php';
$req="DELETE FROM livre WHERE id_book=$id";
mysqli_query($conn,$req);
header('location:../index.php');