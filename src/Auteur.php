<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Auteur
{
    public function __construct(
        private string $prenom,
        private string $nom,
    )
    {
    }
}
