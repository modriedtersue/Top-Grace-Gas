<?php
require_once ("../../controller/Controller.php");
if(isset($_GET['delete']) && $_GET['delete'] !== ""){
    switch ($_GET['delete']){
        case "delete_customer":
            $id = $main->clean($_POST['id']);
           echo $main->run("DELETE FROM `customers` WHERE `customers`.`customer_id` ='$id'")?1:0;
            break;
    }
}else{
    return false;
}

?>


