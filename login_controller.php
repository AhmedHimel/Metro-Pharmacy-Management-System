<?php
// session_start();
 include_once 'db.php';
  
       function validateUser(){



    //    error_reporting(0);



        $conn=getConnection();

        $sql="select * from Employee";

        $result=oci_parse($conn,$sql);

   

        oci_execute($result);



        return $result;

    } 

//function authenticateUser($username,$pass){
  //  $query = "select * from Admin where ADMIN_NAME='$username' and ADMIN_PASSWORD='$pass'";
    //$rs=get($query);
    //if(count($rs)>0){
      //  return true;
    //}
    //return false;
    
//}

?>
