<?php 
if (isset($_SESSION['loggedin'])) {   

    header("Location: http://www.google.com");   	
	
} elseif (isset($_COOKIE['Loggedin'])) {   
	
    header("Location: http://www.google.com");

} else {

    header("Location: sessao_expirada.php");

}  
 ?>