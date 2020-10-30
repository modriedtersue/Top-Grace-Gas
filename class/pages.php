<?php
require_once "../controller/Controller.php";
class pages extends MainController {

    public function get_pages(){
        if(!isset($_GET['p'])){
            $this->require_page("pages/admin/dashboard.php");
        } else {
            $get = @$_GET['p'];
            switch($get){
                case 'view_card':
                    $this->require_page("pages/admin/view_card.php");
                    break;
                case 'view_user_transaction':
                    $this->require_page("pages/admin/view_user_transaction.php");
                    break;
                case 'transactions':
                    $this->require_page("pages/admin/transaction.php");
                    break;
                case 'buy_gas':
                    $this->require_page("pages/admin/buy_gas.php");
                    break;
                case 'customer_add':
                    $this->require_page("pages/admin/add_customer.php");
                    break;
                case 'customer_all':
                    $this->require_page("pages/admin/all_customer.php");
                    break;
                case 'change_password':
                    $this->require_page("pages/admin/password.php");
                    break;
                case 'admin_settings':
                    $this->require_page("pages/admin/settings.php");
                    break;
                case 'add_admin':
                    $this->require_page("pages/admin/add_admin.php");
                    break;
                case 'all_admin':
                    $this->require_page("pages/admin/all_admin.php");
                    break;
                case 'Collection':
                    $this->require_page("pages/admin/collections.php");
                    break;
                default:
                    $this->require_page("pages/error_page.php");
                    break;
            }
        }
    }
    public function get_pages_title(){
        if(!isset($_GET['p'])){
            $title = ".:: Dashboard ::.";
        } else {
            $get = @$_GET['p'];
            switch($get){
                case 'customer_add':
                    $title = ".:: Add Customer  ::.";
                    break;
                case 'view_card':
                    $title = ".:: View  Customer Card ::.";
                    break;
                case 'customer_all':
                    $title = ".:: All Customer ::.";
                    break;
                case 'admin_settings':
                    $title = ".:: Settings ::.";
                    break;
                case 'change_password':
                    $title = ".:: Password ::.";
                    break;
                case 'transactions':
                    $title = ".:: Transactions ::.";
                    break;
                case 'buy_gas':
                    $title = ".:: Buy Gas ::.";
                    break;
                case 'view_user_transaction':
                    $title = ".:: View User Transaction  ::.";
                    break;
                case 'add_admin':
                    $title = ".:: Add Admin ::.";
                    break;
                case 'all_admin':
                    $title = ".::  All Admin ::.";
                    break;
                case 'collection':
                    $title = ".::  Collection ::.";
                    break;
                default:
                    echo "404 title not found";
                    break;

            }
        }
        echo $title;
    }
    public function active($get){
        if(!isset($_GET['p']) && $get == "" && $get !=="index"){
            echo "";
        }else if($get == @$_GET['p'] && isset($_GET['p'])){
            echo "active";
        } else if($get  == "index" && !isset($_GET['p'])){
            echo "active";
        } else {
            echo "";
        }
    }
}
$pages = new pages;

