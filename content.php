<?php
header("Connect_type:text/json");
$conn = mysqli_connect('localhost','root','','danche') or die("Conntent successful". mysqli_connect_error($conn));
$json = null;
date_default_timezone_set("Asia/Shanghai");
?>