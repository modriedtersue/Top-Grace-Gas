<?php
/**
 * Created by PhpStorm.
 * User: zungwe
 * Date: 11/21/2017
 * Time: 3:23 PM
 */
session_start();

unset($_SESSION['login_user_id']);
session_destroy();
header("Location: ../index.php");
?>
You have successfully logged out.<br>
Do you wish to login back ? <a href="../index.php">Click to login</a>

