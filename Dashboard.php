<!DOCTYPE html>
<html lang="en">
  
   <?php 
          $title = 'Dashboard';

          include 'head.php';
      
   ?>

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
