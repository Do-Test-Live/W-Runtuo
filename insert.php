<?php
include('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if (isset($_POST["loanApply"])) {

    $c_name = $db_handle->checkValue($_POST['c_name']);
    $e_name = $db_handle->checkValue($_POST['e_name']);
    $identy_num = $db_handle->checkValue($_POST['identy_num']);
    $dob = $db_handle->checkValue($_POST['dob']);
    $contact_num = $db_handle->checkValue($_POST['contact_num']);
    $pay_method = $db_handle->checkValue($_POST['pay_method']);
    $applicant_type = $db_handle->checkValue($_POST['applicant_type']);
    $loan_amount = $db_handle->checkValue($_POST['loan_amount']);
    $other_info = $db_handle->checkValue($_POST['other_info']);
    $gender = $db_handle->checkValue($_POST['gender']);
    $contact_time = $db_handle->checkValue($_POST['contact_time']);



    $inserted_at=date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `loan_apply`(`c_name`, `e_name`, `identy_num`, `dob`, `gender`, `contact_num`, `contact_time`, `pay_method`, `applicant_type`, `loan_amount`, `other_info`, `inserted_at`) VALUES ('$c_name','$e_name','$identy_num','$dob','$gender','$contact_num','$contact_time','$pay_method','$applicant_type','$loan_amount','$other_info','$inserted_at')");

    echo "<script>
                alert('申請成功');
                window.location.href='index.html';
                </script>";
}


if (isset($_POST["contactAdd"])) {

    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $subject = $db_handle->checkValue($_POST['subject']);
    $message = $db_handle->checkValue($_POST['message']);


    $inserted_at=date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `contact`(`name`, `email`, `subject`, `message`, `inserted_at`) VALUES ('$name','$email','$subject','$message','$inserted_at')");

    echo "<script>
                alert('成功聯繫');
                window.location.href='index.html';
                </script>";
}
