<?php
require_once ('../include/dbController.php');
$db_handle=new DBController();

if (isset($_GET['report'])) {
    $order_data = $db_handle->runQuery("SELECT * FROM loan_apply order by id desc");
    $row_count = $db_handle->numRows("SELECT * FROM loan_apply order by id desc");
    $row_data = '';
    if($row_count>0){
        for ($i = 0; $i < $row_count; $i++) {
            $row_data .= '<tr>
                                <td>' . $order_data[$i]['id'] . '</td>
                                <td>' . $order_data[$i]['c_name'] . '</td>
                                <td>' . $order_data[$i]['e_name'] . '</td>
                                <td>' . $order_data[$i]['identy_num'] . '</td>
                                <td>' . $order_data[$i]['dob'] . '</td>
                                <td>' . $order_data[$i]['gender'] . '</td>
                                <td>' . $order_data[$i]['contact_time'] . '</td>
                                <td>' . $order_data[$i]['contact_num'] . '</td>
                                <td>' . $order_data[$i]['pay_method'] . '</td>
                                <td>' . $order_data[$i]['applicant_type'] . '</td>
                                <td>' . $order_data[$i]['loan_amount'] . '</td>
                                <td>' . $order_data[$i]['other_info'] . '</td>
                           </tr>';
        }
    }else{
        $row_data .= "<tr>
                            <td colspan='6' style='text-align:center;'>No Result Found</td>
                        </tr>";
    }

    $email_to = $db_handle->notify_email();
    $subject = 'Email From Runtuo';
    $headers = "From: Runtuo <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <head>
                        <style>
                            #order_details {
                                font-family: Arial, Helvetica, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                                text-transform: capitalize;
                            }
                    
                            #order_details td, #order_details th {
                                border: 1px solid #ddd;
                                padding: 8px;
                            }
                    
                            #order_details tr:nth-child(even){background-color: #f2f2f2;}
                    
                            #order_details tr:hover {background-color: #ddd;}
                    
                            #order_details th {
                                padding-top: 12px;
                                padding-bottom: 12px;
                                text-align: left;
                                background-color: #000000;
                                color: white;
                            }
                        </style>
                    </head>
                    <body style='background-color: #eee; font-size: 16px;'>
                    <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                    
                        <h3 style='color:black;text-align: center'>Here is your Report</h3>
                    
                        <table id='order_details'>
                            <tr>
                                <th>ID</th>
                                <th>CN Name</th>
                                <th>EN Name</th>
                                <th>ID No</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Contact Time</th>
                                <th>Contact Number</th>
                                <th>Delivery Method</th>
                                <th>Applicant</th>
                                <th>Loan Amnt.</th>
                                <th>Other Info.</th>
                            </tr>
                           $row_data
                        </table>
                    
                    </div>
                    </body>
                  </html>";

    if(mail($email_to, $subject, $messege, $headers)){
        echo "<script>
                alert('Data Exported Successfully');
                window.location.href='apply.php';
                </script>";
    }
}


