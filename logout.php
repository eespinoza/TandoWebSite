<?php
session_start();
session_destroy();
$running_session = false;
header("Location: index.php");
?>