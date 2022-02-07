<?php
    session_start();
    $admin_id = $_SESSION['userid'];
    //echo $admin_id ;
    $site_url = "http://localhost/clothing/";
    extract($_REQUEST);
    //echo $page;
    if(isset($_REQUEST['page']) && $_REQUEST['page']!= ""){
        $page = $_REQUEST['page'];
    }
    else{
        $page = "dashboard";
    }
    include('include/database/checklogin.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/layout/header_script.php');?>
</head>
<body class="skin-default fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <?php include('include/layout/top_header.php');?>
        </header>
        <aside class="left-sidebar">
            <?php include('include/layout/left_sidebar.php');?>
        </aside>

        <div class="page-wrapper">
            <?php include('include/body/'.$page.'.php');?>
            <?php include('include/layout/right_sidebar.php');?>
        </div>
        <footer class="footer">
            <?php include('include/layout/footer.php');?>    
        </footer>
    </div>
    <?php include('include/layout/footer_script.php');?>
</body>

</html>