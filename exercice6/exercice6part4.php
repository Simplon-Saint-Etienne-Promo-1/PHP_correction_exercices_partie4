<?php
function renvoiChaine($nom, $prenom, $age) {
    return "Bonjour " . $nom . " " . $prenom . ",tu as " . $age . "ans";
}

echo renvoiChaine("Farre", "Mickaël", 35);