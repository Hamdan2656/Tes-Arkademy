<?php	
		function is_password_valid($pass) {
			return preg_match('/^[a-zA-Z0-9\S]{8,8}$/i',$pass) ;
		}
   
     // Cara menggunakan fungsi di atas
	 if (is_password_valid("123Qwer_")) {
         echo "Password Is Valid " ;
     } else {
         echo "Password Is Invalid" ;
     }
	 
?>