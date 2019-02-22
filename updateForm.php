<?php include './src/head.php';
 require_once 'private/db.php';
 $id=$_GET['id'];
 $title=$_GET['title'];
 $author=$_GET['author'];
 $publisher=$_GET['publisher'];
?>

<h1>Update Book</h1>
<form action="./private/update.php?id='<?=$id?>'" method="post">
<label for="title">Title</label>
<input type="text" name="title" id="" max="255" value="<?=$title;?>">
<label for="author">Author</label>
<input type="text" name="author" id="" max="255" value="<?=$author;?>">
<label for="publisher">Publisher</label>
<input type="text" name="publisher" id="" max="255" value="<?=$publisher;?>">
<input type="submit" name='sub' value="update">
</form>

<?php include './src/foot.php';?>