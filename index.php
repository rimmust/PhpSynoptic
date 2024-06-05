<?php
include "includes/header.php";  
require_once "includes/dbh.php";
?>

<?php
//one can access the home page once he or she are logged in
session_start();
if(!isset($_SESSION["user"]))
{
  header("Location: login.php");
}

?>

<body>

<div class="container">
<h3>Welcome to our site Traveler</h3>
<?php
if(isset($_POST["post"]))
{
  $countryname = $_POST["cname"];
  $details = $_POST["details"];
  $date  = $_POST ["date"];
  $image = $_POST ["image"]; 
  

  $sqlInsert = "INSERT INTO posts(countryname,details,image,date) 
  VALUES ('$countryname','$details', '$image', '$date')";
  if(mysqli_query($conn,$sqlInsert))
  {
     header("Location: index.php");
  }else
  {
   die("no inserted data");
  }
}

?>
<?php
$sqlSelect = "SELECT * FROM posts";
$result = mysqli_query($conn,$sqlSelect);
while($data = mysqli_fetch_array($result))
{
?>
    <?php echo $data['countryname']; ?> <br>
    <?php echo $data['details']; ?> <br>
    <?php echo $data['date']; ?><br>
    <img src="uploads/<?php echo $row['image'] ?> "/>
  

    <a class= "btn btn-info" href= "editpost.php?id=<?php echo $data ["postid"]?>">Edit</a>
    <a class= "btn btn-danger" href= "deletepost.php?id=<?php echo $data ["postid"]?>">Delete</a>
<br>
<br>
<?php
}
?>


 </div>

</div>
</body>

<?php
include "includes/footer.php";
?>
