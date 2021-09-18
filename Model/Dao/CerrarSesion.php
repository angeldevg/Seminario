<?php

session_start();

session_destroy();

echo header("Location: http://192.168.1.117/TIENDA-ENLINEA-SEMINARIO/View/login.html");

?>