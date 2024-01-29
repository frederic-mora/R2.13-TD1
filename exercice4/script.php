<?php

/*  Q1

    La fonction PHP file_get_contents permet de "charger" un fichier sous forme de chaîne de caractères.
    
    Ajoutez les instructions nécessaires pour qu'une requête HTTP ciblant ce script se comporte ainsi : 
    . si la requête ne comporte pas de paramètre : charger puis renvoyer la page "index.html"
    . si la requête comporte un paramètre page dont la valeur est home/about/portfolio/contact : charger
    puis renvoyer la page html correspondante.
    . si la requête comporte un paramètre page mais avec une valeur autre : charger puis renvoyer index.html

    Testez votre script en effectuant des requêtes HTTP depuis la barre d'adresse de votre navigateur.
*/

$filename = "about.html";
$content = file_get_contents($filename);
echo $content;



?>