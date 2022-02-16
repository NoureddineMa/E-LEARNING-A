<!DOCTYPE html>
<html lang="en">
  
<?php 
          $title = 'SIGN IN';
          include 'head.php';
  


          if(empty($_POST))
         
   ?>
  <!-- start body  -->
  <body class="for-bg">
    <section
      class="container-fluid d-flex justify-content-center align-items-center  min-vh-100"
    >
      <section
        class="rounded p-4 col-lg-4 col-md-6 col-sm-7 bg-white shadow px-5"
      >
        <section class="row">
          <form class="form-container" method="POST" >
            <h1 class="ps-3 ms-4 fw-bolder">E-classe</h1>
            <div class="text-center mt-4">
              <h2 class="text-uppercase" style="font-size: 17px">Sign In   </h2>
              <p class="text-secondary" style="font-size: 15px">
                Enter your credentials to access your account
              </p>
            </div>
            <!-- <div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   <php? echo $errMsg;   ?>
  </div> -->
</div>
            <div class="mb-1">
              <label for="InputEmail1" class="form-label" style="font-size: 13px">Email</label>

              <input
                type="email"
                name="email"
                class="form-control py-1"
                placeholder="Enter your email"
                id="InputEmail1"
                aria-describedby="emailHelp">
            </div>
            <div class="mb-2">
              <label for="InputPassword1" class="form-label mt-1" style="font-size: 13px"
                >Password</label
              >
              <input
                type="password"
                type="password"
                placeholder="Enter Your Password"
                class="form-control py-1"
                id="InputPassword1" >
            </div>
            
            <div class="form-check my-2">
               <input class="form-check-input " type="checkbox"  name="chekbox" checked>
               <label class="form-check-label">Remember me </label>
            </div>
            

            <input
              type="submit"
              class="btn btn-info btn-lg w-100 text-white p-2"
              value="SIGN IN"
            >
            
            

            <p class="text-center pt-3 fs-6 text-muted">
              Forgot your password?
              <a class="lien" href="#">Reset Password</a>
            </p>
          </form>
        </section>
      </section>
    </section>
  </body>
</html>