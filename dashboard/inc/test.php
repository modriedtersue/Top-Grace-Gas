<?php
/*
require_once ("../../controller/Controller.php");
$customer_id = $main->clean($_POST['customer_id']);
$table_id = $main->clean($_POST['id']);
$name = $main->clean($_POST['name']);
$price = $main->clean($_POST['price']);
$price_db = $main->get_gas_price();
$kg = $main->clean($_POST['kg']);
$plan_id = $main->select('customers','customer_id',$table_id,'customer_plan_id');
$amount = $price * $kg;
$total_field = $main->clean($_POST['total']);
$plan = $main->clean($_POST['plan']);
$get_concession = $main->get_concession_amount();
$time = time();
if($kg < 5){
   echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `date`, `status`) VALUES (NULL, '0', '$plan_id', '2', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', current_timestamp(),'0')")?1:0;

}elseif($plan == 'Save' && $kg >= 5){

    echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `date`, `status`) VALUES (NULL, '$get_concession', '$plan_id', '0', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', current_timestamp(),'0')")?1:0;

}elseif ($plan == 'Instant' && $kg >= 5){
    echo  $main->run("INSERT INTO `transactions` (`transaction_id`, `c_amount`, `c_id`, `c_status`, `price`, `kg`, `total_amount`, `tran_customer_id`, `admin_id`, `date`, `status`) VALUES (NULL, '$get_concession', '$plan_id', '1', '$price', '$kg', '$amount', '$customer_id', '".$_SESSION['login_user_id']."', current_timestamp(),'0')")?1:0;

}else{
    echo 0;
}
break;

*/

?>
<body>
<h1>Adding 'a' and 'b'</h1>

  a: <input type="number" name="a" id="a"><br>
  b: <input type="number" name="b" id="b"><br>
  ab <input type="number" name="b" id="b"><br>
  <button onclick="add(document.getElementById('a').value,document.getElementById('b').value)">Add</button>

<script>
  function add(a,b) {
    var sum = parseInt(a) + parseInt(b);
    alert(sum);
  }
</script>
</body>