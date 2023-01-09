<?php
function renvoiGenderAdult($age, $genre) {
    if($age > 18) {
        // Majeur
        if($genre == "Homme") {
            echo "Vous êtes un homme et vous êtes majeur";
        } elseif($genre == "Femme") {
            echo "Vous êtes un femme et vous êtes majeur";
        } else {
            echo "Vous êtes d'un autre genre et vous êtes majeur";
        }
    } else {
        // Mineur
        if($genre == "Homme") {
            echo "Vous êtes un homme et vous êtes mineur";
        } elseif($genre == "Femme") {
            echo "Vous êtes un femme et vous êtes mineur";
        } else {
            "Vous êtes d'un autre genre et vous êtes mineur";
        }
    }    
}
