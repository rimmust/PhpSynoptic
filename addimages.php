<?php
include "includes/header.php"; 
require_once "includes/dbh.php";

?>


<?php
if(isset($_POST['submit']))
{
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder =  'uploads/'.$file_name;

    $query = mysqli_query($conn,"INSERT INTO gallery (image) VALUES
    ('$file_name')");

    if(move_uploaded_file($tempname,$folder))
    {
        echo "image uploaded";
    }
    else
    {
        echo "image not uploaded";
    }
}
?>
<body>
    <h3> Add photos</h3>
    <div class="container">
    
<div>


<?php 
$res = mysqli_query($conn,"SELECT * FROM gallery");
while($row = mysqli_fetch_assoc($res)){
 ?>
  <img src="uploads/<?php echo $row['image'] ?> "/>
<?php } ?>

</body>
</div>

<form method = "POST" enctype="multipart/form-data">
    <input class= " btn btn-primary" type = "file" name = "image"/>
    <input class= " btn btn-primary" type= "submit" name="submit">

 </form>
 <br>

 
<?php
include "includes/footer.php";
?>