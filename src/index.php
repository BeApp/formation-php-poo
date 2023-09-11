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

$livre1 = new Livre("123", "Lorem 1", 100, $auteur1);
$livre2 = new Livre("234", "Lorem 2", 100, $auteur1);
$livre3 = new Livre("345", "Lorem 3", 100, $auteur1);
$livre4 = new Livre("456", "Lorem 4", 20, $auteur2);

$bibliotheque->ajout($livre1);
$bibliotheque->ajout($livre2);
$bibliotheque->ajout($livre3);
$bibliotheque->ajout($livre4);

