<?php
require_once '../vendor/autoload.php';
// Définir le dossier où se trouvent les templates
$loader = new \Twig\Loader\FilesystemLoader('../templates');
// initialiser l'environnement de Twig et définir le dossier du cache
$twig = new \Twig\Environment($loader, [
'cache' => '../cache',
]);
// Affecter les variables du template et appeller le rendu
echo $twig->render('base.html.twig',
[
'title' => 'Essai de Twig',
'text' => 'Texte inséré dans la page.',
]
);
