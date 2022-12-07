<?php

    $password = 'WDHASWASDASaD';
    if (strlen($password) < 5) {
        echo 'malenkiy parol';
    }

    if (strlen($password) > 10) {
        echo 'bolshoy parol';
    }

    else {
        echo 'parol podxodit';
    }
?>