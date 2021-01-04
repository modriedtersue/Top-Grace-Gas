<?php
require_once ("DBConnect.php");
session_start();
class MainController extends  DatabaseConnect{

    public function redirect_to($location = NULL){
        if($location!=NULL){
            header("Location:{$location}");
            exit;
        }
    }
    public function price_duration($kg){
        $run = $this->run("SELECT * FROM `set_kg_price` WHERE `status`='1'");
        while ($row = $this->fetch($run)){
        $done = $row['done'];
        $dtwo = $row['dtwo'];
            if($kg >= $done && $kg <= $dtwo){
                return $row['price'];
            }
        }
    }
    public function verifyHash($password,$hashedPassword){
        return crypt($password, $hashedPassword) == $hashedPassword;
    }
    /* student user session method start end */
    public function session_check(){
        if(isset($_SESSION['login_user_id'])){
            return true;
        } else {
            return false;
        }
    }
    public function user_not_login($location){
        if($this->session_check() == false) {
            $this->redirect_to($location);
        }
    }

    public function user_login($location){
        if($this->session_check() == true){
            $this->redirect_to($location);
        }
    }
    public function password_hash($password){
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
            $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
            return crypt($password, $salt);
        }

    }
    public function plan_balance($user_id){
        $run2 = $this->run("SELECT SUM(`plan_amount`) AS plan_amunt FROM `transactions` WHERE `plan_status`='2'AND `tran_customer_id`='$user_id'");
        $row2 = $this->fetch($run2);
        return $row2['plan_amunt'];
    }

    public function RowCount($run){
        $query = $this->run($run);
        return $this->rows($query);
    }
    public function btn($var){
        if($var == 1){
            $btn = 'btn-success';
        }else if($var == 0){
            $btn = 'btn-danger';
        }
        return $btn;
    }
    public function toggle($var){
        if($var == 1){
            $toggle = 'fa-toggle-on';
        }else if($var == 0){
            $toggle = 'fa-toggle-off';
        }
        return $toggle;
    }
    public function status($var){
        if($var == 1){
            $status = '<button class="btn btn-success btn-xs">  <i class="fa fa-check-circle"></i></button>';
        }else if($var == 0){
            $status = '<button class="btn btn-danger btn-xs"> <i class="fa fa-remove"></i></button>';
        }
        return $status;
    }

    public function plan_status($var){
        if($var == 1){
            $status = '<span class="label label-sm label-success"> Save</span>';
        }else if($var == 2){
            $status = '<span class="label label-sm label-primary"> Instant</span>';
        }
        return $status;
    }
    public function settle_status($var){
        if($var == 1){
            $status = '<span class="label label-sm label-success">Paid </span>';
        }else if($var == 2 ){
            $status = '<span class="label label-sm label-primary"> Outstanding</span>';
        }else{
            $status = '<span class="label label-sm label-danger"> None </span>';
        }
        return $status;
    }
    public function admin_status($var){
        if($var == 1){
            $status = 'Grant Access';
        }else if($var == 0){
            $status = 'Block Access';
        }else{
            $status = ' None ';
        }
        return $status;
    }
    public function select($tbl,$where,$action,$field){
        $sql = "SELECT `$field` FROM `$tbl` WHERE `$where`='$action'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row[$field];
            }
        }else{
            return false;
        }
    }

    public function login($username,$password){

    }
    public function gen_customer_id(){
        return 'TG-'.rand(000000,999999);
    }

    public function get_gas_price(){
        $run = $this->run("SELECT * FROM `set_kg_price` WHERE `status`='1' AND `kg_id`='1'");
        $row =  $this->fetch($run);
        return $row['price'];
    }
    public function get_customer_calculator($customer_id){
        $run = $this->run("SELECT * FROM `customers` WHERE `customer_id`='$customer_id' AND `customer_status`='1'");
        $row =  $this->fetch($run);
        return $row['customer_calculator'];
    }
    public function get_concession_amount(){
       // $run = $this->run("SELECT * FROM `set_concession` WHERE `status`='1' AND `concession_id`='1'");
       $row =  100; //$this->fetch($run);
        return $row;
    }

    public function format_money($number, $fractional=false)
    {
        if ($fractional) {
            $number = sprintf('%.2f', $number);
        }
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
            if ($replaced != $number) {
                $number = $replaced;
            } else {
                break;
            }
        }
        return $number;
    }
    public function concession_pay_status(){
        $sql = "SELECT SUM(`c_amount`) AS c_amt FROM `transactions` WHERE `admin_id`='".$_SESSION['login_user_id']."' AND `c_status`='1'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    public function concession_pay_status_all(){
        $sql = "SELECT SUM(`c_amount`) AS c_amt FROM `transactions` WHERE `c_status`='1'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    public function concession_outstanding_status(){
        $sql = "SELECT SUM(`c_amount`) AS c_amt FROM `transactions` WHERE `admin_id`='".$_SESSION['login_user_id']."' AND `c_status`='0'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    public function concession_outstanding_status_all(){
        $sql = "SELECT SUM(`c_amount`) AS c_amt FROM `transactions` WHERE `c_status`='0'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    public function transaction_total(){
        $sql = "SELECT SUM(`total_amount`) AS c_amt FROM `transactions` WHERE `admin_id`='".$_SESSION['login_user_id']."' AND `status`='0'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    public function transaction_total_all(){
        $sql = "SELECT SUM(`total_amount`) AS c_amt FROM `transactions` WHERE `status`='0'";
        $run = $this->run($sql);
        if($this->rows($run) == 1){
            while ($row = $this->fetch($run)){
                return $row['c_amt'];
            }
        }else{
            return false;
        }

    }
    
    public function time_ago($time_ago){
        $cur_time 	= time();
        $time_elapsed 	= $cur_time - $time_ago;
        $seconds 	= $time_elapsed ;
        $minutes 	= round($time_elapsed / 60 );
        $hours 		= round($time_elapsed / 3600);
        $days 		= round($time_elapsed / 86400 );
        $weeks 		= round($time_elapsed / 604800);
        $months 	= round($time_elapsed / 2600640 );
        $years 		= round($time_elapsed / 31207680 );
        // Seconds
        if($seconds <= 60){
            return "$seconds seconds ago";
        }
        //Minutes
        else if($minutes <=60){
            if($minutes==1){
                return "one minute ago";
            }
            else{
                return "$minutes minutes ago";
            }
        }
        //Hours
        else if($hours <=24){
            if($hours==1){
                return "an hour ago";
            }else{
                return "$hours hours ago";
            }
        }
        //Days
        else if($days <= 7){
            if($days==1){
                return "yesterday";
            }else{
                return "$days days ago";
            }
        }
        //Weeks
        else if($weeks <= 4.3){
            if($weeks==1){
                return "a week ago";
            }else{
                return "$weeks weeks ago";
            }
        }
        //Months
        else if($months <=12){
            if($months==1){
                return "a month ago";
            }else{
                return "$months months ago";
            }
        }
        //Years
        else{
            if($years==1){
                return "one year ago";
            }else{
                return "$years years ago";
            }
        }
    }
}

$main = new MainController;
