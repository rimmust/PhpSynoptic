<?php
include "includes/header.php";  
require_once "includes/dbh.php";
?>

<?php
session_start();
session_destroy();
header("Location: login.php")

?>



<body>

<div class="container">

 <h3>SignOut</h3>

    

  <a href = "logout.php" class="btn-btn-warning">SignOut</a> 

</div>



</body>



<?php
include "includes/footer.php";
?>
