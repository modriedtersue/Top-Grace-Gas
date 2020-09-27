<?php
require_once ("../../controller/Controller.php");
if(isset($_GET['insert']) && $_GET['insert'] !== ""){
    switch ($_GET['insert']){

        case "add_customer":
            $customer_id = $main->clean($_POST['customer_id']);
            $name = $main->clean($_POST['name']);
            $email = $main->clean($_POST['email']);
            $address = $main->clean($_POST['address']);
            $phone = $main->clean($_POST['phone']);
            $gender = $main->clean($_POST['gender']);
            $plan = $main->clean($_POST['plan']);
            echo  $main->run("INSERT INTO `customers`(`customer_id`, `customer_serial_number`, `customer_number`, `customer_gender`, `customer_name`, `customer_email`,`customer_address`, `customer_plan_id`,`customer_status`)VALUES (NULL, '$customer_id', '$phone', '$gender', '$name', '$email', '$address', '$plan','1')");
            break;
        case "transaction_buy_gas":
            $customer_id = $main->clean($_POST['customer_id']);
            $table_id = $main->clean($_POST['id']);
            $get_balance = $main->select('customers','customer_id',$table_id,'customer_calculator');
            $name = $main->clean($_POST['name']);
            $price = $main->clean($_POST['price']);
            $price_db = $main->get_gas_price();
            $kg = $main->clean($_POST['kg']);
            $plan_id = $main->select('customers','customer_id',$table_id,'customer_plan_id');
            $amount = $price * $kg;
            $total_field = $main->clean($_POST['total']);
            $plan = $main->clean($_POST['plan']);
            $get_concession = $main->get_concession_amount();
            $update_balance = $get_balance + $get_concession;
            $time = time();
            if($kg < 5){
               echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `time`, `date`, `status`) VALUES (NULL, '0', '$plan_id', '2', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', '$time', current_timestamp(),'0')")?1:0;

            }elseif($plan == 'Save' && $kg >= 5){

                $main->run("UPDATE `customers` SET `customer_calculator` ='$update_balance' WHERE `customers`.`customer_id` ='$table_id'");

                echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `time`, `date`, `status`) VALUES (NULL, '$get_concession', '$plan_id', '0', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', '$time', current_timestamp(),'0')")?1:0;

            }elseif ($plan == 'Instant' && $kg >= 5){
                echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `time`, `date`, `status`) VALUES (NULL, '$get_concession', '$plan_id', '1', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', '$time', current_timestamp(),'0')")?1:0;

            }else{
                echo 0;
            }
            break;
    }
}else{
    return false;
}

?>


