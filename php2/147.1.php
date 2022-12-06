<?php
    session_start();
    if (isset($_SESSION['time']) == false) {
        echo 'первое посещение';

    }
    else {
        echo time() - $_SESSION['time'];
    }
     $_SESSION['time'] = time (); // текущее значение, первый раз

?>