<?php
 require_once "includes/dbh.php";
?>

<?php
//the post can be delete by getting all details and attributes from post

$id = $_GET['id'];
if($id){
$sqlDelete = "DELETE FROM posts WHERE postid = $id";
if(mysqli_query($conn,$sqlDelete))
{
    header("Location: index.php");
}else{
    die("data not deleted");
}
}else
{
    echo "no post found";
}

?>