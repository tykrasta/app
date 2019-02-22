<?php include './src/head.php';?>

<h1>Insert Book</h1>
<form action="./private/insert.php" method="post">
<label for="title">Title</label>
<input type="text" name="title" id="" max="255">
<label for="author">Author</label>
<input type="text" name="author" id="" max="255">
<label for="publisher">Publisher</label>
<input type="text" name="publisher" id="" max="255">
<input type="submit" name='sub' value="Save">
</form>

<?php include './src/foot.php';?>