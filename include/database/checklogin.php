<?php
    if($_SESSION['name']!= null){
        $admin_name = $_SESSION['name'];
        $admin_id= $_SESSION['userid'];
        $admin_role= $_SESSION["userrole"];
    }
    else{
        header("Location: login.php");
        exit();
    }
?>