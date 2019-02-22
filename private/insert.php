<?php
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
if(!empty($title)&&!empty($author)&&!empty($publisher)){
    require_once 'db.php';
    $req="INSERT INTO livre(book_title,author,publisher) 
        VALUES ('$title','$author','$publisher')";
    mysqli_query($conn,$req);
        
}
header('location:../index.php');   
}
