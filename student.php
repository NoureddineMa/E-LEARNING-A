<!DOCTYPE html>
<html lang="en">

<?php 
          $title = 'Student';

          include 'head.php';
      
   ?>


<body>
  <!-- start side bar -->
  <?php include 'sidebar.php' ;?>   
                 <!-- end side bar -->
<div class="col overflow-auto">
            <!-- start nav bar  -->
            <?php include 'navbar.php' ;?>
         <!-- end nav bar -->
         
    
     <div class="bg-light py-2  ">
            <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                <h5 class=" fw-bolder d-none d-sm-block mx-3">student list</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                    <a class="add btn btn-info text text-white text-uppercase mx-4 py-2 " href="Add_student.php">
                        add new student
                    </a>
                </div>
            </div>
        <hr>


        <main class="row">
            <div class="container ">
                <div class="table-responsive-sm table-responsive-md px-4">
                <table class="table align-middle table-borderless ">
                    <thead>
                    <tr class="text-capitalize  ">
                        <th scope="col" class="d-none d-sm-block"></th>
                        <th scope="col" class="text-muted h6 ">name</th>
                        <th scope="col" class="d-none d-sm-table-cell text-muted h6">email</th>
                        <th scope="col" class="d-none d-sm-table-cell text-muted h6">phone</th>
                        <th scope="col" class="text-muted h6">enroll number</th>
                        <th scope="col" class="d-none d-sm-table-cell text-muted h6">date of addmision</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <!-- include table  -->
                       <?php  include 'tableaustudent.php' ?>
                    </tbody>
                </table>
                </div>
            </div>    
        </main>
</div>
</div>
</body>
</html>