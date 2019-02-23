<?php
class db{
    
 function select($select,$from){
    require_once 'private/db.php';
    $req= "SELECT $select FROM $from";
    $result = mysqli_query($conn,$req);
    return $result;
} 

}


$db = new db;
include 'src/head.php';
?>

<table>
<tr>
    <th>No.</th>
    <th>Author</th>
    <th>Title</th>
    <th>Publisher</th>
    <th>Action</th>
</tr>
<?php
$result=$db->select("*","livre");
$count = 0;
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id_book'];
    $title=$row['book_title'];
    $author=$row['author'];
    $publisher=$row['publisher'];   
?>
    <tr>
        <td><?=($count++)?></td>
        <td><?=$author?></td>
        <td><?=$title?></td>
        <td><?=$publisher?></td>
        <td>
            <a href="./updateForm.php?id=<?=$id?>&title=<?=$title?>&author=<?=$author?>&publisher=<?=$publisher?>"><i class="fas fa-pencil-alt"></i></a>
            &nbsp;&nbsp;&nbsp;
            <a href="./private/delete.php?id=<?=$id?>"><i class="fas fa-window-close"></i></a>
        </td>
    </tr>

<?php } ?>
</table>
<?php include 'src/foot.php';?>