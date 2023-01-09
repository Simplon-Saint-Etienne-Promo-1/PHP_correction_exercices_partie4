<?php
    function testNb($nb1, $nb2){
        if($nb1 > $nb2) {
            echo "Le premier nombre est plus grand"; 
        } elseif ($nb1 < $nb2) {
            echo "Le premier nombre est plus petit"; 
        } else {
            echo "Les deux nombres sont identiques";
        }
    }