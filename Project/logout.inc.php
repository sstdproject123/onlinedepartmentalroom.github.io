<?php
session_start();
session_unset();
/*session_destroy();*/
if (session_destroy()) {
	header('location:front.php');
}
/*echo "<script type='text/javascript'> document.location='front.php'; </script>";*/

?>

