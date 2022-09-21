<?php 

   function getConnection(){
      
      //Oracle DB user name
      $username = 'HIMEL';

      // Oracle DB user password
      $password = '*Hossain1$';

      // Oracle DB connection string
      $connection_string = 'localhost/xe';

      //Connect to an Oracle database
      $conn = oci_connect($username,$password,$connection_string);

      if (!$conn) {

         $e = oci_error();
         trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      }
     

      return $conn;
   }
?>