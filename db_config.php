<?php
	
	
	function execute($query){ // responsible for running insert,update,delete
		

		$conn = oci_connect('HIMEL', '*Hossain1$', 'localhost/XE');
		
		
		
	}
	function get($query){  // responsible for running select queries
		

		
		$conn = oci_connect('HIMEL', '*Hossain1$', 'localhost/XE');
		
		$data = oci_parse($conn,$query);
		oci_execute($data);
		
		return $data;
	}

	function getConnection(){
		$conn=oci_connect('HIMEL', '*Hossain1$', 'localhost/XE');
		if (!$conn) {

			$e = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		 }

		 return $conn;
	}




	

	
		
?>