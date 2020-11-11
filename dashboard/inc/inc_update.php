<?php
require_once ("../../controller/Controller.php");
if(isset($_GET['update']) && $_GET['update'] !== ""){
switch ($_GET['update']){
case "admin_login_user":
    $username = $main->clean($_POST['username']);
    $password = $main->clean($_POST['password']);
    $password_md = md5($password);
    $run = $main->run("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password_md' AND `status`='1'");
    $row = $main->rows($run);
    if($row == 1){
        $user_id = $main->select("admin","username",$username,'admin_id');
        $user_type = $main->select("admin","username",$username,'user_type');
        $_SESSION['login_user_id'] = $user_id;
        $_SESSION['login_user_type'] = $user_type;
        echo 1;

    }else{
        echo 0;
    }
    break;
case "update_kg_price":
    $price = $main->clean($_POST['price']);
    echo  $main->run("UPDATE `set_kg_price` SET `price` = '$price' WHERE `set_kg_price`.`kg_id` ='1'")?1:0;
    break;
case "update_concession_amount":
    $amount = $main->clean($_POST['amount']);
    echo  $main->run("UPDATE `set_concession` SET `amount` = '$amount' WHERE `set_concession`.`concession_id` ='1'")?1:0;
    break;
case "change_password":
    // get user id by session
    $user_id = $_SESSION['login_user_id'];
    // get the user old password db
    $old_db = $main->select('admin','admin_id',$user_id,'password');
    $old = $main->clean(md5($_POST['old']));
    $new = $main->clean(md5($_POST['new']));
    $confirm = $main->clean(md5($_POST['confirm']));
    if($old !== $old_db){
        echo 2;
    }else if ($new == $confirm){
        echo $main->run("UPDATE `admin` SET `password` = '$new' WHERE `admin`.`admin_id` ='$user_id'")?1:0;
    }else{
        echo 3;
    }
    break;
case "update_customer":
    $id = $main->clean($_POST['id']);
    $customer_id = $main->clean($_POST['customer_id']);
    $name = $main->clean($_POST['name']);
    $email = $main->clean($_POST['email']);
    $phone = $main->clean($_POST['phone']);
    $plan = $main->clean($_POST['plan']);
    $gender = $main->clean($_POST['gender']);
    $address = $main->clean($_POST['address']);
    echo $main->run("UPDATE `customers` SET `customer_serial_number` = '$customer_id', `customer_number` = '$phone', `customer_gender` = '$gender', `customer_name` = '$name', `customer_email` = '$email', `customer_address` = '$address', `customer_plan_id` = '$plan' WHERE `customers`.`customer_id` ='$id'")?1:0;
    break;
case "update_admin":
    $id = $main->clean($_POST['id']);
    $username = $main->clean($_POST['username']);
    $name = $main->clean($_POST['name']);
    $email = $main->clean($_POST['email']);
    $phone = $main->clean($_POST['phone']);
    $status = $main->clean($_POST['status']);
    $user_type = $main->clean($_POST['user_type']);
    $address = $main->clean($_POST['address']);
    echo $main->run("UPDATE `admin` SET `username` = '$username',`name` = '$name', `address` = '$address', `phone` = '$phone', `email` = '$email', `user_type` = '$user_type', `status` = '$status' WHERE `admin`.`admin_id` ='$id'")?1:0;

case "admin_modal":
    $table_id = $main->clean($_POST['id']);
    $query = $main->run("SELECT * FROM `admin` WHERE `admin_id`='$table_id'");
    $row_qry = $main->fetch($query);
    ?>
    <div class="form-body">
        <div id="msg"></div>
        <div class="form-group row">
            <input type="hidden" name="id" id="id" value="<?php echo $table_id ?>" readonly>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3"> Admin Username <span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="username" id="username" s value="<?php echo $row_qry['username'] ?>" class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">FullName <span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="name" id="name" value="<?php echo $row_qry['name'] ?>"  class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Phone Number<span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="number" name="phone" id="phone"  value="<?php echo $row_qry['phone'] ?>"  class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Email (optional)<span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="email" id="email" value="<?php echo $row_qry['email'] ?>" class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">User Type <span class="required"> * </span></label>
            <div class="col-md-8">
                <select class="form-control input-height" name="user_type" id="user_type">
                    <option value="<?php echo $row_qry['user_type'] ?>"> <?php echo $row_qry['user_type'] ?> </option>
                    <option value="admin"> Admin </option>
                    <option value="super"> Super </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Address
                <span class="required"> * </span>
            </label>
            <div class="col-md-8">
                <textarea name="address" id="address" class="form-control" rows="5"><?php echo $row_qry['address'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Status <span class="required"> * </span></label>
            <div class="col-md-8">
                <select class="form-control input-height" name="status" id="status">
                    <option value="<?php echo $row_qry['status'] ?>"> <?php echo $main->admin_status($row_qry['status']) ?> </option>
                    <option value="0"> Block Access </option>
                    <option value="1"> Grant Access </option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="offset-md-3 col-md-9">
                    <button type="submit" id="btn_update_customer" class="btn btn-success pull-left">Update</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    break;
case "customer_modal":
    $table_id = $main->clean($_POST['id']);
    $query = $main->run("SELECT * FROM `customers` WHERE `customer_id`='$table_id'");
    $row_qry = $main->fetch($query);
    ?>
    <div class="form-body">
        <div id="msg"></div>
        <div class="form-group row">
            <input type="hidden" name="id" id="id" value="<?php echo $table_id ?>" readonly>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Customer ID <span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="customer_id" id="customer_id" readonly value="<?php echo $row_qry['customer_serial_number'] ?>" class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">FullName <span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="name" id="name" value="<?php echo $row_qry['customer_name'] ?>"  class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Phone Number<span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="number" name="phone" id="phone"  value="<?php echo $row_qry['customer_number'] ?>"  class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Email (optional)<span class="required"> * </span></label>
            <div class="col-md-8">
                <input type="text" name="email" id="email" value="<?php echo $row_qry['customer_email'] ?>" class="form-control input-height" />
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Gender <span class="required"> * </span></label>
            <div class="col-md-8">
                <select class="form-control input-height" name="gender" id="gender">
                    <option value="<?php echo $row_qry['customer_gender'] ?>"> <?php echo $row_qry['customer_gender'] ?> </option>
                    <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Address
                <span class="required"> * </span>
            </label>
            <div class="col-md-8">
                <textarea name="address" id="address" class="form-control" rows="5"> <?php echo $row_qry['customer_address'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3">Plan
                <span class="required"> * </span>
            </label>
            <div class="col-md-8">
                <select class="form-control input-height" name="plan" id="plan">
                    <option value="<?php echo $row_qry['customer_plan_id'] ?>"> <?php echo $main->select("plans","plan_id",$row_qry['customer_plan_id'],"plan")?></option>
                    <?php
                    $run_plan = $main->run("SELECT * FROM `plans` WHERE `plan_status`='1'");
                    while ($row_plan = $main->fetch($run_plan)){
                        ?>
                        <option value="<?php echo $row_plan['plan_id'] ?>"> <?php echo $row_plan['plan'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="offset-md-3 col-md-9">
                    <button type="submit" id="btn_update_customer" class="btn btn-success pull-left">Update</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    break;
case "buy_gas_modal":
$table_id = $main->clean($_POST['id']);
$query = $main->run("SELECT * FROM `customers` WHERE `customer_id`='$table_id'");
$row_qry = $main->fetch($query);
?>
<div class="form-body">
    <div id="msg"></div>
    <div class="form-group row">
        <label class="control-label col-md-3">Customer ID <span class="required"> * </span></label>
        <div class="col-md-8">
            <input type="text" name="customer_id" id="customer_id" readonly value="<?php echo $row_qry['customer_serial_number'] ?>" class="form-control input-height" />
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3"> KG <span class="required"> * </span></label>
        <div class="col-md-8">
            <input type="number" name="kg" id="kg" onkeyup="get_total();" placeholder="e.g 7" class="form-control input-height" />
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3"> KG Price <span class="required"> * </span></label>
        <div class="col-md-8">
            <input type="text" name="price" id="price" readonly value="<?php echo $main->get_gas_price(); ?>"  class="form-control input-height" />
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Total<span class="required"> * </span></label>
        <div class="col-md-8">
            <input type="text" name="total" id="total" readonly value="0" class="form-control input-height" />
        </div>
        <div class="form-group row">
            <input type="hidden" name="id" id="id" value="<?php echo $table_id ?>" readonly>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-8">
                    <button type="submit" id="btn_buy_gas" class="btn btn-primary">Pay <i class="fa fa-money"></i> </button>
                </div>
            </div>
        </div>
    </div>

    <?php
    break;
    }
    }else{
        return false;
    }

    ?>


