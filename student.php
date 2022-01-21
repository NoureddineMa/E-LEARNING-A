<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Student</title>
</head>
<body>
  <!-- start side bar -->
  <?php include 'sidebar.php' ;?>   
                 <!-- end side bar -->

            <!-- start nav bar  -->
            <?php include 'navbar.php' ;?>
         <!-- end nav bar -->
         
    
     <div class="bg-light py-2  ">
            <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                <h5 class=" fw-bolder d-none d-sm-block mx-3">student list</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                    <button class="add btn btn-info text text-white text-uppercase mx-4 py-2 ">
                        add new student
                    </button>
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
                    <tr class="bg-white ">
                        <th scope="row" class="d-none d-sm-block"><img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                        <td>maher</td>
                        <td  class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td class="d-none d-sm-table-cell">0623329476</td>
                        <td>525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                    <tr class=" bg-white ">
                        <th scope="row" class="d-none d-sm-block"><img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                        <td>maher</td>
                        <td class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td class="d-none d-sm-table-cell">0623329476</td>
                        <td>525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                    <tr class="bg-white">
                        <th scope="row" class="d-none d-sm-block"><img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                        <td>maher</td>
                        <td class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td class="d-none d-sm-table-cell">0623329476</td>
                        <td>525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                    <tr class="bg-white">
                        <th scope="row" class="d-none d-sm-block"> <img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                        <td>maher</td>
                        <td class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td>0623329476</td>
                        <td class="d-none d-sm-table-cell">525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                    <tr class= bg-white ">
                        <th scope="row" class="d-none d-sm-block"> <img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"></th>
                        <td>maher</td>
                        <td class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td class="d-none d-sm-table-cell">0623329476</td>
                        <td>525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                    <tr class=" bg-white">
                        <th scope="row" class="d-none d-sm-block"> <img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                        <td>maher</td>
                        <td class="d-none d-sm-table-cell">noureddinemaher13@gmail.com</td>
                        <td class="d-none d-sm-table-cell">0623329476</td>
                        <td>525252525255252</td>
                        <td class="d-none d-sm-table-cell">08-Dec, 2021</td>
                        <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                        <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                    </tr>
                    <th>
                        
                    
                    </tbody>
                </table>
                </div>
            </div>    
        </main>

        

        




</div>

</body>
</html>