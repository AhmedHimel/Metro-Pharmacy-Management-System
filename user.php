
<?php

    include_once('db_config.php');

//=======================Validatin for login===========================================

    function validateUser(){

    //    error_reporting(0);

        $conn=getConnection();
        $sql="select * from register";
        $result=oci_parse($conn,$sql);
    
        oci_execute($result);

        return $result; 
    }

?>