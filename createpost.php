<?php
include "includes/header.php";  
?>

<body>
    <h3>Create  a Post  </h3>
    <div class="container">
      <div class="Box"></div>
      <div class="mb-3">
        <label for="text" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameofP" placeholder="Place visisted ">
      </div>

      <div class="form-floating">
        <textarea class="form-control" placeholder="Details " id="deatailbox" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Details</label>
        <br>
        <section>
          <label for="text">Place Image </label> <br>
          <img src="" alt="images"><img>
         </section>
      </div>
      <br>
      <br>

      <button class="btn btn-primary" type="button" id="PostButton ">Post</button>
    </div>
          
</body>



<?php
include "includes/footer.php";
?>
