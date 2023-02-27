<?php

# Etape 1 : charger l'autoloader 
require_once "vendor/autoload.php";

# Etape 2 : on indique où se trouve le repertoire des nos vues twig

$loader= new \Twig\Loader\FilesystemLoader("templates") ;

# Etape 3 ( une etape pas obligatoire): On indique les informations d'environnement pour l'execution de Twig
$twig = new \Twig\Environment($loader,[
'cache'=> false, # si vous souhaitez utliser du cache : indiquez le chemin vers le dossier de cache(par defaut c'est false)
'debug'=> true,

]);

# Etape 4 ( optionnelle): si on souhaite utlisé le dump , on ajouter l'extension Debug
$twig->addExtension(new \Twig\Extension\DebugExtension());

#les données (on envoie a notre fichier index.html.twig via la méthode render grace a un tableau)
$nom="Kamel Essridi";
$monAge =34;
$mesTaillesVetements =['pointure'=>42, 'pull'=>'L', 'pantalon'=>"32L"] ;
$salaire = 1300000;
$tableau = [ 'entrer'=>[
    'entrer2' => 'Salade niçoise',
    'entrer1' => 'salade de pate'
],
    'plat ' => 'Steak frite',
    'dessert' => 'tarte au daim',
];

$metier = 
    ['Lundi' => 'Ecole',
    'Mardi' => 'Malade',
    'Mercredi' => 'Operationel'];
    
    $livres = [
        ['titre' => 'Le PHP en 1 semaine', 'auteur' => 'Ilyes', 'prix' => 19.90],
        ['titre' => 'Techniques de dragues', 'auteur' => 'Massi', 'prix' => 39.90],
        ['titre' => 'Recettes de gauffres', 'auteur' => 'Cedric', 'prix' => 14.90]
    ];
        
$date = new DateTime();
# Etape 5: On demande a afficher la vue
echo $twig->render("index.html.twig",[
    'nom'=> $nom,
    'age'=>$monAge,
    'tailles' =>$mesTaillesVetements,
    'salaire' =>$salaire,
    'tableau' =>$tableau,
    'metier' =>$metier,
    'livres' =>$livres
]);
