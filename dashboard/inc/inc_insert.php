<?php
require_once ("../../controller/Controller.php");
if(isset($_GET['insert']) && $_GET['insert'] !== ""){
    switch ($_GET['insert']){
        case "get_price_kg":
            $kg = $main->clean($_POST['kg']);
            $price = $main->price_duration($kg);
            echo $price;
            break;
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
        case "add_admin":
            $username = $main->clean($_POST['username']);
            $name = $main->clean($_POST['name']);
            $email = $main->clean($_POST['email']);
            $address = $main->clean($_POST['address']);
            $phone = $main->clean($_POST['phone']);
            $user_type = $main->clean($_POST['user_type']);
            $password = md5('admin');
            echo  $main->run("INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `address`, `phone`, `email`, `user_type`, `status`) VALUES (NULL, '$username', '$password', '$name', '$address', '$phone', '$email', '$user_type', '1')");
            break;
        case "transaction_buy_gas":
            $customer_id = $main->clean($_POST['customer_id']);
            $table_id = $main->clean($_POST['id']);
            $kg = $main->clean($_POST['kg']);
            $price = $main->price_duration($kg);
            $amount = $price * $kg;
            $plan_id = $main->select('customers','customer_id',$table_id,'customer_plan_id');
            $get_concession = $main->get_concession_amount();
            $hash = time();
            $date_sort =  date('Y-m-d');
            if($kg < 5){
                echo  $main->run("INSERT INTO `transactions` (`plan_id`,`plan_amount`,`plan_status`,`kg_price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`,`date_sort`) VALUES ('$plan_id','0.00',0,'$price','$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."','$date_sort')")?1:0;
            }elseif($plan_id == 2 && $kg >= 5){
                echo  $main->run("INSERT INTO `transactions` (`plan_id`,`plan_amount`,`plan_status`,`kg_price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`,`date_sort`) VALUES ('$plan_id','$get_concession',1,'$price','$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."','$date_sort')")?1:0;

            }elseif ($plan_id == 1 && $kg >= 5){
                echo  $main->run("INSERT INTO `transactions` (`plan_id`,`plan_amount`,`plan_status`,`kg_price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`,`date_sort`) VALUES ('$plan_id','$get_concession',2,'$price','$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."','$date_sort')")?1:0;
    
            }else{
                echo 0;
            }
          
            break;
    }
}else{
    return false;
}

?>


