<?php
include "includes/headernonav.php";  
require_once "includes/dbh.php";
?>

<?php
//one can access the home page once he or she are logged in
session_start();
if(isset($_SESSION["user"]))
{
  header("Location: index.php");
}

?>
<body>
    <h3>Create account</h3>
    <div class="container">

    <?php
    //on clikc save these inputs of theuser 
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"]; 
        $dob = $_POST["dob"];
        $password = $_POST["password"];
        $repassword = $_POST["confpassword"];
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);
        $comments = $_POST["comments"];
        //validations message 
        $errors = array();
        if(empty($name) OR  empty($surname) OR empty($email) OR empty( $dob) 
        OR empty($password)  OR empty($repassword) OR empty($comments))
      {
        array_push($errors,"All fields required please");

      }
      if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        array_push($errors,"Email is not valid");
      }
      if(strlen($password)<8)
      {
        array_push($errors,"Password less than 8 digits");
      }
      if($password!==$repassword)
      {
        array_push($errors,"Password doesnt match");
      }

      //check if the email already exsists 
      $sql = "SELECT * FROM users WHERE email ='$email'";
      $result = mysqli_query($conn,$sql);
      $rowCount = mysqli_num_rows($result);
      if($rowCount>0)
      {
        array_push($errors,"Email already in used");
      }

      if(count($errors) >0)
      {
        foreach($errors as $error)
        {
          // echo "<div class ='alert alert-danger'>$error</div>";
          echo $error;
        }
      }else
      {
        //insert the data in the database
          $sql = "INSERT INTO users (name,surname , email, Dob,password,comments) 
          VALUES (? ,? ,? ,? ,? ,? )";
          $stmt = mysqli_stmt_init($conn);
          $prepeareStmt=mysqli_stmt_prepare($stmt,$sql);
        if($prepeareStmt)
        {
          //start adding the values 
          mysqli_stmt_bind_param($stmt,"ssssss",$name,$surname,$email,$dob,$passwordHash,$comments);
          mysqli_stmt_execute($stmt);
          echo "<div class ='alert alert-success'>You are registered </div>";
          header("Location: index.php");
          
    
        }else
        {
          die("Something went wrong pls try again");
        }
      }
      
    }
    ?>
        <form action ="createaccount.php" method ="post">
            <div class="row mb-3">
              <label for="Name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" >
              </div>
            </div>

            <div class="row mb-3">
              <label for="Surname" class="col-sm-2 col-form-label">Surname</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" name="surname">
              </div>
            </div>


              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Dob" class="col-sm-2 col-form-label">Dob</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="Dob" name="dob">
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">re Password </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="confPassword" name="confpassword">
                </div>
              </div>


              <label for="floatingTextarea2">Other</label>
              <textarea class="form-control" placeholder="How would you describe your self "
               id="comments" name="comments" style="height: 100px"></textarea>
              

       <input class= " btn btn-primary" type="submit" value ="register" name="submit">
      </form>
     
      </div>
      <div> <p>already registred <a href ="login.php"> sign in </a></p></div>
</body>


<?php
include "includes/footer.php";
?>
