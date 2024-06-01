<?php
include "includes/header.php"; 
require_once "includes/dbh.php"; 
?>

<body>
    <h3>Profile  </h3>
    <div class="container">
    <?php
    $query = "SELECT * FROM users";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) > 0 )
    {
      foreach($query_run as $row)
      ?>
    
    <label for="Name" class="col-sm-2 col-form-label">Name</label> <?php echo $row['name']; ?> <br>
    <label for="Name" class="col-sm-2 col-form-label">surname</label> <?php echo $row['surname']; ?> <br>
    <label for="Name" class="col-sm-2 col-form-label">dob</label><?php echo $row['Dob']; ?><br>  
    <label for="Name" class="col-sm-2 col-form-label">email</label><?php echo $row['email']; ?> <br>
    <label for="floatingTextarea2">Comments :</label>
     <?php echo $row['comments']; ?> <br>
    <?php
    }
  
  ?> 
  </div>

</body>
<button class="btn btn-primary" type="button" id="EditAccountDetails ">Edit</button>




<?php
include "includes/footer.php";
?>
