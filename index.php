<!DOCTYPE html>
<html lang="en">
  
<?php 
          $title = 'SIGN IN';

          include 'head.php';
      
   ?>
  <!-- start body  -->
  <body class="for-bg">
    <section
      class="container-fluid d-flex justify-content-center align-items-center min-vh-100"
    >
      <section
        class="rounded p-4 col-lg-4 col-md-6 col-sm-7 bg-white shadow px-5"
      >
        <section class="row">
          <form class="form-container">
            <h1 class="ps-3 ms-4 fw-bolder">E-classe</h1>
            <div class="text-center mt-4">
              <h2 class="text-uppercase" style="font-size: 17px">Sign In</h2>
              <p class="text-secondary" style="font-size: 15px">
                Enter your credentials to access your account
              </p>
            </div>
            <div class="mb-1">
              <label for="InputEmail1" class="form-label" style="font-size: 13px" ; ;">Email</label>
              <input
                type="email"
                class="form-control py-1"
                placeholder="Enter your email"
                id="InputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-4">
              <label for="InputPassword1" class="form-label mt-1" style="font-size: 13px"
                >Password</label
              >
              <input
                type="password"
                placeholder="Enter Your Password"
                class="form-control py-1"
                id="InputPassword1"
              />
            </div>

            <button
              type="submit"
              class="btn btn-info btn-lg w-100 text-white p-2"
            >
              <a
                href="Dashboard.php"
                class="text-decoration-none text-white"
                style="font-size: 16px"
              >
                SIGN IN</a
              >
            </button>

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
