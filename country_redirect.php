<?php

$selected = $_GET['country'];

switch($selected){
	
	case"malaysia":
		header('Location:malaysia.php');
		break;
	
	case"vietnam":
		header('Location:vietnam.php');
		break;
	
    case"thailand":
        header('Location:thailand.php');
        break;
        
    case"philippines":
        header('Location:philippines.php');
        break;
        
    case"indonesia":
        header('Location:indonesia.php');
        break;
        
	default:
		echo"error";
		break;
		
	
}

?>
