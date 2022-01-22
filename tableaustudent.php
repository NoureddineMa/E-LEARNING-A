<?php 

$tableaustudent = [
                  [          
                     // first 
                            'name' => 'maher',
                            'email' => 'noureddinemaher13@gmail.com',
                            'phone' => '0623329476',
                            'enroll_number' => '525252525255252',
                            'date_of_addmision' => '08-Dec,2021',

                  ] ,
                         //second table 
                  [
                    'name' => 'wassim',
                    'email' => 'wassimwassim2@gmail.com',
                    'phone' => '0676464634',
                    'enroll_number' => '52434343435255252',
                    'date_of_addmision' => '08-Dec,2021',

                 ] ,
                         // third table 
                [
                    'name' => 'khalid',
                    'email' => 'khalid2@gmail.com',
                    'phone' => '0676464634',
                    'enroll_number' => '52434343435255252',
                    'date_of_addmision' => '08-Dec,2021',

                 ],
                        // four table 
                 [
                    'name' => 'Yahya',
                    'email' => 'Yahya2@gmail.com',
                    'phone' => '0676464634',
                    'enroll_number' => '52434343435255252',
                    'date_of_addmision' => '08-Dec,2021',

                 ],

                 


                 ];
                 foreach($tableaustudent as $tableau){
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