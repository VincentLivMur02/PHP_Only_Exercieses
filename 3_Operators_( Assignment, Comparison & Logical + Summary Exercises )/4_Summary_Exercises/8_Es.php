<?php

/*

Esercizio 8:

- Hai una variabile $punti_vita con valore 100 e una variabile $punti_esperienza con valore 50. 
- Un'azione nel gioco ti fa perdere 10 punti vita e ti fa guadagnare 20 punti esperienza. 
- Aggiorna i valori delle variabili e stampa il risultato finale.

*/

$lifePoints = 100;
$pointsExperience = 50;

echo "Points then : $lifePoints, $pointsExperience </br>";
// mandare a schermo i punti precedenti senza far cambiare le variabili appena inserite = salvare in nuove variabili
$lifePoints -= 10;
$pointsExperience += 20; 
echo "Points now : $lifePoints, $pointsExperience";

# i use -= for subtract the value of $lifePoints variable = 100 to lose 10 points of life
# and i use += for add the value of $pointsExperience variable = 50 to assign 20 more points of experience





