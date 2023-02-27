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

# Etape 5: On demande a afficher la vue
echo $twig->render("contact.html.twig");
