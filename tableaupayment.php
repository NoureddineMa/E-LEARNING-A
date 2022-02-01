<?php 
                $table_payment = file_get_contents("payment.json");
                $table_payment = json_decode($table_payment,true);
               
                foreach ($table_payment as $table){
                    echo '
                <th scope="row" >'.$table['name'].'</th>
                <td>'.$table['Payment_Schedule'].'</td>
                <td>'.$table['Bill_Number'].'</td>
                <td>'.$table['Amount_Paid'].'</td>
                <td>'.$table['Balance_amount'].'</td>
                <td>'.$table['Date'].'</td>
                <td><i class="fal fa-eye text-info"></i></td>
                </tr> ' ;
                }
               
?>