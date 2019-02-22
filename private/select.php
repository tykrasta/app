<?php
require_once 'db.php';
$req="SELECT * FROM livre";
$result = mysqli_query($conn,$req);