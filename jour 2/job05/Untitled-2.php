<?php
function estPremier($n) {
    if ($n <= 1) {
        return false; // 1. Vérifie si $n est inférieur ou égal à 1 : dans ce cas, ce n’est pas un nombre premier.
    }
    for ($i = 2; $i <= sqrt($n); $i++) { // 2. Boucle de 2 à la racine carrée de $n pour tester les diviseurs possibles.
        if ($n % $i == 0) {              // 3. Si $n est divisible par $i (reste 0),
            return false;                // 4. alors $n n’est pas premier : on retourne false.
        }
    }
    return true;                         // 5. Si aucun diviseur trouvé, $n est premier : on retourne true.
}

for ($nombre = 2; $nombre <= 1000; $nombre++) { // 6. Boucle pour parcourir tous les nombres de 2 à 1000.
    if (estPremier($nombre)) {                     // 7. Si $nombre est premier (fonction retourne true),
        echo $nombre . "<br />";                   // 8. alors on l’affiche suivi d’un saut de ligne HTML.
    }
}
?>
