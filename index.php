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

    

  <a href = "logout.php" class="btn-btn-warning">SignOut</a> 

</div>



</body>



<?php
include "includes/footer.php";
?>
