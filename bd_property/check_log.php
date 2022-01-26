<?php
if (($_SESSION['type']!=2)&&($_SESSION['type']!=1)){
echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
exit;
}
?>