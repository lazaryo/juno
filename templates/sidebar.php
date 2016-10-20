<?php
    if (is_home()) {
        echo 'add sorting here'; 
    } else if (is_single()) {
        echo 'add author info here'; 
    }
?>