<?php
include "includes/header.php";  
require_once "includes/dbh.php";


?>

<?php

$id = $_GET['id'];
if($id){
//query to get data
$sqlEdit = "SELECT * FROM posts WHERE postid= $id";
$result = mysqli_query($conn,$sqlEdit);
}else
{
    echo "no post found";
}

?>

<body>



<h3>Edit  a Post  </h3>
    <form action ="process.php" method ="post">
        <?php
        //this code get the result of the data
        //uses the same form of the created post
        //then send the data to process to check for the update
        while($data = mysqli_fetch_array($result)){
        ?>  
    
      <div class="mb-3">
    
        <label for="text" class="form-label"> country Name</label>
        <input type="text" class="form-control"  name= "cname" id="" placeholder="Place visited "
        value=" <?php  echo $data ['countryname'] ; ?>">
      </div>

      <div class="form-floating">
        <textarea class="form-control" placeholder="Details" 
        name="details"  id="" style="height: 100px">  <?php  echo $data ['details'];?> </textarea>
         <label for="floatingTextarea2">Details</label>
        <br>
      </div>
      <input type="hidden" name="date" value="<?php  echo date("Y/m/d"); ?>">
      <input type="hidden" name="id" value=" <?php echo $id; ?>">

        </div>
        

     <input type= "submit" value="Submit" name="update" >
     
    <?php
    }
    ?>
 </form>
</body>
<?php
include "includes/footer.php";
?>
