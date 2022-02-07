<?php

    if($_REQUEST['page']='admin'){
        if($admin_role=="M"){
        }
        else{
             //header("Location: http://localhost/invms/");
           ?>
            <script type="text/javascript">
                window.location = "index.php";
            </script>
           <?php
            exit();
        }
    }
    
?>