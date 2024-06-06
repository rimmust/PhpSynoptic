<?php
include "includes/header.php";  
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
    <h3>About Us </h3>
    <div class="container">
      
    
 <aside>
  Hello Travaller<br><br>
  Thanks for sharing your travelling expierences in our,website for more content please follow us on our chanell for more information<br>
  We as a company alaways love travelling and this passion for travelling gave us the idea to create this social media platform for travellers<br>
  where on can stor his journies online and share his expeirences with other.
  Once again we thank you for choosing our website.
 </aside>

 <br>
 <br>
 <br>

<div class="banner">
    <img src="images/banner.png" alt="profile picture image"> 
  </div>
</body>
</div>

<?php
include "includes/footer.php";
?>
