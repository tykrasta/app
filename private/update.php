<?php
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
    $id=$_GET['id'];
if(!empty($title)&&!empty($author)&&!empty($publisher)){
    require_once 'db.php';
    $req="UPDATE livre 
    SET book_title='".$title."', 
     author='".$author."', 
     publisher='".$publisher."' 
    WHERE id_book=$id";
    

    mysqli_query($conn,$req); 
    header('location:../index.php');       
}
   
}
