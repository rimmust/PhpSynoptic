<?php
include "includes/header.php";  
?>

<body>
    <h3>Create account</h3>
    <div class="container">

        <form>
            <div class="row mb-3">
              <label for="Name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name">
              </div>
            </div>

            <div class="row mb-3">
              <label for="Surname" class="col-sm-2 col-form-label">Surname</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="surname">
              </div>
            </div>

            <div class="row mb-3">
                <label for="town" class="col-sm-2 col-form-label">Town</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="town">
                </div>
              </div>

              <div class="row mb-3">
                <label for="emial" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="emial">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Dob" class="col-sm-2 col-form-label">Dob</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="Dob">
                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email">
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password">
                </div>
              </div>

              <div class="row mb-3">
                <label for="re-password" class="col-sm-2 col-form-label">re Password </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="re-password">
                </div>
              </div>

              <label for="travelrate" class="col-sm-2 col-form-label">Travel Rate </label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="travelrate">
                <label class="form-check-label" for="flexRadioDefault1">
                  Few times </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="travelrate">
                <label class="form-check-label" for="flexRadioDefault1">
                  A lot of travelling 
                  </label>
              </div>

            
          </form>
        
      </div>

      <button class="btn btn-primary" type="button" id="RegisterButton" >Register</button>

      <button class="btn btn-primary" type="button" id="EditButton" >EditAccount</button>
    
</body>


<?php
include "includes/footer.php";
?>
