<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokécon</title>

    <link rel="stylesheet" href="pokecon.css">
</head>
<body>
   <h1>Pokécon</h1>

   <h2>Le pokédex de la mort qui tue</h2>

   <div class="php">
   <?php


/**

 * Bienvenue dans ce module PHP

 * Nous allons travailler à la réalisation d'un pokedex

 */



// Pikachu

$attaque_pikachu = 15;

$defense_pikachu = 10;

$pv_pikachu = 25;



// Bulbizarre

$attaque_bulbizarre = 8;

$defense_bulbizarre = 20;

$pv_bulbizarre = 30;



// pikachu attaque bulbizarre

echo "<p>Pikachu attaque bulbizarre</p>";

if ($attaque_pikachu >= $defense_bulbizarre) {

  // L'attaque est supérieure à la défense : pikachu touche

  $coup = $attaque_pikachu - $defense_bulbizarre + 1; // La valeur du coup est la différence entre l'attaque et la défense

  $pv_bulbizarre -= $coup;

  echo "<p>Bulbizarre perd $coup PV, il lui reste $pv_bulbizarre PV</p>";

} else {

  // La défense est supérieure à l'attaque, pikachu prend la moitié du coup et la défense baisse un peu

  $coup = ($defense_bulbizarre - $attaque_pikachu) / 2;

  $pv_pikachu -= $coup;

  $defense_bulbizarre -= 1;

  echo "<p>Bulbizarre perd 1 Points de défense, il lui reste $defense_bulbizarre Points de défense</p>";

  echo "<p>Pikachu râte son attaque ! Il perd $coup Points de vie, il lui reste $pv_pikachu Points de vie</p>";

}



if ($pv_bulbizarre <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

  echo "<p>Bulbizarre est KO !</p>";

if ($pv_pikachu <= 0)

  echo "<p>Pikachu est KO !</p>";



// Et maintenant la contre-attaque : à vous de jouer !

// bulbizarre attaque pikachu

echo "<p>Bulbizarre attaque Pikachu</p>";

if ($attaque_bulbizarre >= $defense_pikachu) {

  // L'attaque est supérieure à la défense : bulbizarre touche

  $coup = $attaque_bulbizarre - $defense_pikachu + 1; // La valeur du coup est la différence entre l'attaque et la défense

  $pv_pikachu -= $coup;

  echo "<p>Pikachu perd $coup PV, il lui reste $pv_pikachu PV</p>";

} else {

  // La défense est supérieure à l'attaque, bulbizarre prend la moitié du coup et la défense baisse un peu

  $coup = ($defense_pikachu - $attaque_bulbizarre) / 2;

  $pv_bulbizarre -= $coup;

  $defense_pikachu -= 1;

  echo "<p>Pikachu perd 1 Points de défense, il lui reste $defense_pikachu Points de défense</p>";

  echo "<p>Bulbizarre râte son attaque ! Il perd $coup Points de vie, il lui reste $pv_bulbizarre Points de vie</p>";

}



if ($pv_bulbizarre <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

  echo "<p>Bulbizarre est KO !</p>";

if ($pv_pikachu <= 0)

  echo "<p>Pikachu est KO !</p>";



// Ajoutons quelques baies pour restaurer des Points de Vies

$pv_baie_rouge = 50;

$pv_baie_noire = 30;



// Bulbizarre mange une baie rouge

// Pikachu mange une baie noire


?>

<h1>Carte de visite</h1>
<h2>On peut faire pareille en html</h2>

<?php

$personnes = array(
    
        '0' => array(
    
            'nom' => 'Dupont',
    
            'prenom' => 'Pierre',
    
            'email' => 'pierre.d@gmail.com',
    
            'telephones' => array(
    
                'fixe' => '03 00 00 00 00',
    
                'portable' => '06 00 00 00 00'
    
            )
    
        ),
    
        '1' => array(
    
            'nom' => 'Dupont',
    
            'prenom' => 'Jean',
    
            'email' => 'jean.d@gmail.com',
    
            'telephones' => array(
    
                'fixe' => '03 00 00 00 00',
    
                'portable' => '06 00 00 00 00'
    
            )
    
        ),
    
        '2' => array(
    
            'nom' => 'Dupont',
    
            'prenom' => 'Marie',
    
            'email' => 'marie.d@gmail.com',
    
        ),
    
      );
    
    
    
      foreach($personnes as $personne) {
    
        echo 'Nom : '.$personne['nom'].'<br/>';
    
        echo 'Prénom : '.$personne['prenom'].'<br/>';
    
        echo 'Email : '.$personne['email'].'<br/>';
    
    
    
        // On vérifie l'existence de la cellule des téléphones
    
        if (isset($personne['telephones'])) {
    
            foreach($personne['telephones'] as $type => $telephone) {
    
                echo 'Téléphone ' . $type . ' : '.$telephone.'<br/>';
    
            }
    
        }
    
      };

?>

<h1>Combat pokécon</h1>

<?php

$pikachu = [
    'pv' => 25,
    'attaque' => 15,
    'defense' => 10
];

$bulbizarre = [
    'pv' => 30,
    'attaque' => 0,
    'defense' => 25
];


    do{
        /**

 * Bienvenue dans ce module PHP

 * Nous allons travailler à la réalisation d'un pokedex

 */



// Pikachu

$attaque_pikachu = 15;

$defense_pikachu = 10;

$pv_pikachu = 25;



// Bulbizarre

$attaque_bulbizarre = 8;

$defense_bulbizarre = 20;

$pv_bulbizarre = 30;



// pikachu attaque bulbizarre

echo "<p>Pikachu attaque bulbizarre</p>";

if ($attaque_pikachu >= $defense_bulbizarre) {

  // L'attaque est supérieure à la défense : pikachu touche

  $coup = $attaque_pikachu - $defense_bulbizarre + 1; // La valeur du coup est la différence entre l'attaque et la défense

  $pv_bulbizarre -= $coup;

  echo "<p>Bulbizarre perd $coup PV, il lui reste $pv_bulbizarre PV</p>";

} else {

  // La défense est supérieure à l'attaque, pikachu prend la moitié du coup et la défense baisse un peu

  $coup = ($defense_bulbizarre - $attaque_pikachu) / 2;

  $pv_pikachu -= $coup;

  $defense_bulbizarre -= 1;

  echo "<p>Bulbizarre perd 1 Points de défense, il lui reste $defense_bulbizarre Points de défense</p>";

  echo "<p>Pikachu râte son attaque ! Il perd $coup Points de vie, il lui reste $pv_pikachu Points de vie</p>";

}



if ($pv_bulbizarre <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

  echo "<p>Bulbizarre est KO !</p>";

if ($pv_pikachu <= 0)

  echo "<p>Pikachu est KO !</p>";



// Et maintenant la contre-attaque : à vous de jouer !

// bulbizarre attaque pikachu

echo "<p>Bulbizarre attaque Pikachu</p>";

if ($attaque_bulbizarre >= $defense_pikachu) {

  // L'attaque est supérieure à la défense : bulbizarre touche

  $coup = $attaque_bulbizarre - $defense_pikachu + 1; // La valeur du coup est la différence entre l'attaque et la défense

  $pv_pikachu -= $coup;

  echo "<p>Pikachu perd $coup PV, il lui reste $pv_pikachu PV</p>";

} else {

  // La défense est supérieure à l'attaque, bulbizarre prend la moitié du coup et la défense baisse un peu

  $coup = ($defense_pikachu - $attaque_bulbizarre) / 2;

  $pv_bulbizarre -= $coup;

  $defense_pikachu -= 1;

  echo "<p>Pikachu perd 1 Points de défense, il lui reste $defense_pikachu Points de défense</p>";

  echo "<p>Bulbizarre râte son attaque ! Il perd $coup Points de vie, il lui reste $pv_bulbizarre Points de vie</p>";

}



if ($pv_bulbizarre <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if

  echo "<p>Bulbizarre est KO !</p>";

if ($pv_pikachu <= 0)

  echo "<p>Pikachu est KO !</p>";



// Ajoutons quelques baies pour restaurer des Points de Vies

$pv_baie_rouge = 50;

$pv_baie_noire = 30;



// Bulbizarre mange une baie rouge

// Pikachu mange une baie noire
    }while ($pv_pikachu['pv'] > 0 && $pv_bulbizarre['pv']  > 0);

?>
   </div>

</body>
</html>