<?php

namespace Dvilleneuve\AppFormationPhpPoo;

$etageres = [
    new Etagere(10),
    new Etagere(15),
    new Etagere(20),
];
$bibliotheque = new Bibliotheque($etageres);

$auteur1 = new Auteur("John", "Doe");
$auteur2 = new Auteur("Lorem", "Ipsum");

$livre1 = new Livre("123", "Lorem 1", $auteur1, 100);
$livre2 = new Livre("234", "Lorem 2", $auteur1, 100);
$livre3 = new Livre("345", "Lorem 3", $auteur1, 100);
$livre4 = new Livre("456", "Lorem 4", $auteur2, 20);

$jeu1 = new JeuPlateau("987", "Lorem 1", $auteur2);
$jeu2 = new JeuPlateau("876", "Lorem 2", $auteur2);

$bibliotheque->ajout($livre1);
$bibliotheque->ajout($livre2);
$bibliotheque->ajout($livre3);
$bibliotheque->ajout($livre4);

$bibliotheque->ajout($jeu1);
$bibliotheque->ajout($jeu2);

