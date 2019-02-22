<?php include './src/head.php';?>

<h1>Books list</h1>
<table>
<tr>
    <th>No.</th>
    <th>Author</th>
    <th>Title</th>
    <th>Publisher</th>
    <th>Action</th>
</tr>
<?php
require_once 'private/select.php';
$count = 0;
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id_book'];
    $title=$row['book_title'];
    $author=$row['author'];
    $publisher=$row['publisher'];   
?>
    <tr>
        <td><?=($count++); ?></td>
        <td><?=$author; ?></td>
        <td><?=$title; ?></td>
        <td><?=$publisher; ?></td>
        <td>
            <a href="./updateForm.php?id=<?=$id?>&title=<?=$title?>&author=<?=$author?>&publisher=<?=$publisher?>">Update</a>
        | <a href="./private/delete.php?id=<?=$id?>">Delete</a>
        </td>
    </tr>

<?php } ?>
</table>

    



<?php include './src/foot.php';?>
