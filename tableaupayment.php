<?php 
                
                $tableaupayment = [
                                  [
                                    'name' => 'maher',
                                    'Payment_Schedule' => 'First',
                                    'Bill_Number' => '00012223',
                                    'Amount_Paid' => 'DHS 100,000',
                                    'Balance_amount' => 'DHS 500,000',
                                    'Date' => '05-Jan, 2022',

                                  ],
                                  [
                                    'name' => 'Lahlali',
                                    'Payment_Schedule' => 'First',
                                    'Bill_Number' => '00012223',
                                    'Amount_Paid' => 'DHS 100,000',
                                    'Balance_amount' => 'DHS 500,000',
                                    'Date' => '05-Jan, 2022',

                                  ],
                                  [
                                    'name' => 'Yahya',
                                    'Payment_Schedule' => 'First',
                                    'Bill_Number' => '00012223',
                                    'Amount_Paid' => 'DHS 100,000',
                                    'Balance_amount' => 'DHS 500,000',
                                    'Date' => '05-Jan, 2022',

                                  ],
                                  [
                                    'name' => 'Boukhari',
                                    'Payment_Schedule' => 'First',
                                    'Bill_Number' => '00012223',
                                    'Amount_Paid' => 'DHS 100,000',
                                    'Balance_amount' => 'DHS 500,000',
                                    'Date' => '05-Jan, 2022',

                                  ],

                                  ];
                foreach ($tableaupayment as $table){
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