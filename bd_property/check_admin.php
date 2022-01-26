<?php
if (($_SESSION['type']!=2)){
echo '<script type="text/javascript"> window.open("index.php","_self");</script>';
exit;
}
?>