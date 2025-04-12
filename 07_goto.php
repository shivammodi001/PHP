<?php
    $x=10;
    if($x+2==10){
        goto label;
        echo "This will not be printed";
        return;
    }

    label:
    echo "this is will printed";
?>