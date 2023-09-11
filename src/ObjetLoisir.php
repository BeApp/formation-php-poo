<?php

namespace Dvilleneuve\AppFormationPhpPoo;

abstract class ObjetLoisir
{
    public function __construct(
        protected string $ean,
        protected string $titre,
        protected Auteur $author,
    )
    {
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return Auteur
     */
    public function getAuthor(): Auteur
    {
        return $this->author;
    }


}
