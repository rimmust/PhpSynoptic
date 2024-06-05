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

<h2>Log In</h2>
<h3>Welcome back share with us more travelling experiences</h3>
<div class="container">

        <form action ="login.php" method ="post">
             <?php
              if(isset($_POST["login"]))
              {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($user)
                {
                  if(password_verify($password,$user["password"]))
                  {
                    //start a new session
                    session_start();
                    $_SESSION["user"] = "yes";
                    //arrange this problem
                      header("Location: index.php");
                      die();
                  }else
                  {
                    echo "<div class ='alert alert-danger'>password does not match </div>";
                  }
                }else
                {
                  echo "<div class ='alert alert-danger'>emails does not match </div>";
                }
              }

             ?>

              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label"> Enter Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>

             
              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              </div>

        <div class= "form-btn">
       <input type="submit" value ="Login" name="login" class="btn btn-primary">
       </div>
      </form>
        </div>

        <div> <p>Not registred <a href ="createaccount.php"> register here</a></p></div>

        <div class="logo">
    <img src="images/logo.png" alt="profile picture image"> 
  </div>
 
  
</body>

<?php
include "includes/footer.php";
?>
