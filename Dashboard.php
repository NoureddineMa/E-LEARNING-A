<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link font style from google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 

    <!-- link font awesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- link bootstrap -->
    <link
      rel="stylesheet"
      href="assets/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Dashboard</title>
  </head>
   <body >
        <!-- start side bar -->
        <?php include 'sidebar.php' ;?>   
            <!-- start nav bar  -->
            <?php include 'navbar.php' ;?>
                <!-- cards  -->

                <main class="row mb-4">
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="card-one  rounded" >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <i class="cap fs-1 fal fa-graduation-cap mb-2 st-ic "></i> 
                                    <p class="card-title fs-6 mb-4 text-muted">Students</p>
                                </div>
                              <p class="card-text text-end fw-bolder  fs-3">243</p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="card-two  rounded " >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <i class="b_mark fs-1 fal fa-bookmark mb-2 co-ic"></i> 
                                    <p class="card-title  mb-4 text-muted ">Course</p>
                                </div>
                              <p class="card-text text-end   fw-bolder fs-3">13</p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4 ">
                        <div class="card-three  rounded" >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <i class="fs-1 fal fa-usd-square mb-2 text-info"></i>
                                    <p class="mb-4 text-muted">Payments</p>
                                </div>
                              <p class="card-text text-end  fw-bolder fs-3"><small>DH</small> 556,000</p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="card-four rounded "  >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <i class="fs-1 fal fa-user mb-2 text-white"></i> 
                                    <p class="mb-4 text-white">Users</p>
                                </div>
                              <p class="card-text text-end fw-bolder fs-3">3</p>

                            </div>
                          </div>
                    </div>
                </main>

               
   </body>
</html>
