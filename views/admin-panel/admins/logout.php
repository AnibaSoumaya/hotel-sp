<?php 



session_start();
session_unset();
session_destroy();

header("Location: http://localhost/hotel/views/admin-panel/admins/login-admins.php");

?>