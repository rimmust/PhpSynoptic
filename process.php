<?php
include "includes/header.php";  
require_once "includes/dbh.php";
?>

<?php
//this code will update the data in the database
//this code will update field inputs and then changes to the index page
if(isset($_POST["update"]))
{
  $countryname = $_POST["cname"];
  $details = $_POST["details"];
  $date  = $_POST ["date"];
  $id = $_POST['id'];

  $sqlUpdate = "UPDATE posts SET countryname ='$countryname',
   details = '$details',date = '$date' WHERE  postid = $id";
  if(mysqli_query($conn,$sqlUpdate))
  {
     header("Location: index.php");
  }else
  {
   die("data is not updated");
  }

}

?>





