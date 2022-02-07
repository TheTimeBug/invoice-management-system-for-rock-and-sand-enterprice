<?php 
session_start();
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $PrivateKey_key = "wkt567r";
    function encrypt($text){
        $encryption = openssl_encrypt($text, $GLOBALS['ciphering'],
        $GLOBALS['PrivateKey_key'], $GLOBALS['options'], $GLOBALS['encryption_iv']);
        return $encryption;
    }


    extract($_POST);
    //echo $username ."......".$password;
    include('../../config/connection.php');

    if($operation=='login'){
        $password2=encrypt($password);
        $sql_query = "SELECT user_id,user_name,user_password,user_role FROM tbl_user WHERE user_username='$username' AND user_active_flag='A'";
        $query_performed = mysqli_query($con,$sql_query);
        $data_row = mysqli_num_rows($query_performed);

        if($data_row==0){
            echo "Wrong Username or password";
        }
        else{
            $admin_data = mysqli_fetch_array($query_performed); 
            
            if($password2 != $admin_data['user_password']){
                echo "Wrong Password";
            }
            else{
                echo "Login Sucessfull";
               
                $_SESSION["username"]= $username;
                $_SESSION["name"]=$admin_data['user_name'];
                $_SESSION["userid"]=$admin_data['user_id'];
                $_SESSION["userrole"]=$admin_data['user_role'];
            }
        }
    }
    else if($operation=='logout'){
        $_SESSION["username"]= null;
        $_SESSION["name"]=null;
        $_SESSION["userid"]=null;
        $_SESSION["userrole"]=null;
        echo "logout Sucessfull";
    }

?>