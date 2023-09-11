<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Etagere
{
    /**
     * @var Livre[]
     */
    private array $livres;

    public function __construct(
        private int $nbPlace
    )
    {
    }

    /**
     * @throws NotEnoughPlaceException
     */
    public function addLivre(Livre $livre): void {
        if (count($this->livres) < $this->nbPlace - 1) {
            $this->livres[] = $livre;
        } else {
            throw new NotEnoughPlaceException();
        }
    }
}
