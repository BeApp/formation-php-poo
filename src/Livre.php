<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Livre extends ObjetLoisir
{
    public function __construct(
        string      $ean,
        string      $titre,
        Auteur      $author,
        private int $nbPage,
    )
    {
        parent::__construct($ean, $titre, $author);
    }

    /**
     * @return int
     */
    public function getNbPage(): int
    {
        return $this->nbPage;
    }


}
