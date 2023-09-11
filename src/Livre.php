<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Livre
{
    public function __construct(
        private string $ean,
        private string $titre,
        private int    $nbPage,
        private Auteur $author,
    )
    {
    }
}
