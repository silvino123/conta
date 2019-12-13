<?php

    session_start();
    unset($_Session['nombre']);
    //$_Session['Nombre'] = '';
    session_destroy();
    header("location:login.html");

?>