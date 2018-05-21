<?php
session_start();
session_unset();
session_destroy();
echo "<h1>Successfully Logged Out</h1>";
?>