<?php

session_start();

session_destroy();

echo header("Location: ../../View/login.html");

?>