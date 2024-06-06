<?php
include "includes/header.php"; 
require_once "includes/dbh.php"; 
?>

<?php
//one can access the home page once he or she are logged in
//this page has the form for the user to make a post 
session_start();
if(!isset($_SESSION["user"]))
{
  header("Location: login.php");
}

?>

<body>

    <h3>Create  a Post  </h3>
    <form action ="index.php" method ="post" >
    <div class="container">
      <div class="mb-3">
     
        <label for="text" class="form-label"> country Name</label>
        <input type="text" class="form-control"  name= "cname" id="" placeholder="Place visited ">
      </div>

      <div class="form-floating">
        <textarea class="form-control" placeholder="Details" 
        name="details"  id="" style="height: 100px" ></textarea>
        <label for="floatingTextarea2">Details</label>
        <br>
      </div>

        <label for="image">Upload photo</label>
        <br>
        <br>
        <input type="file" class="form-control" name="image"  id="image" placeholder="Upload image ">
        <br>
      <br>
      <br>

      <input type="hidden" name="date" value="<?php  echo date("Y/m/d"); ?>">

     <input type= "submit" value="Submit" name="post" >
    </div>
          
</body>



<?php
include "includes/footer.php";
?>
