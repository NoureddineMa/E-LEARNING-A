<?php 

                  $table_student = file_get_contents("student.json");
                  $table_student = json_decode($table_student,true);

                 foreach($table_student as $tableau){
                     echo '
                     <tr class="bg-white ">
                     <th scope="row" class="d-none d-sm-block"><img src="assets/img/student.jpg"  width="65px" alt="image représente étudiants"> </th>
                     <td>'.$tableau['name'].'</td>
                     <td  class="d-none d-sm-table-cell">'.$tableau['email'].'</td>
                     <td class="d-none d-sm-table-cell">'.$tableau['phone'].'</td>
                     <td>'.$tableau['enroll_number'].'</td>
                     <td class="d-none d-sm-table-cell">'.$tableau['date_of_addmision'].'</td>
                     <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                     <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                 </tr> ';
                 }

?>