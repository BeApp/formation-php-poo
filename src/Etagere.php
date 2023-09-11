<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Etagere
{
    /**
     * @var ObjetLoisir[]
     */
    private array $objetsLoisirs;

    public function __construct(
        private int $nbPlace
    )
    {
    }

    /**
     * @throws NotEnoughPlaceException
     */
    public function addObjetLoisir(ObjetLoisir $objetLoisir): void {
        if ($this->estRempli()) {
            $this->objetsLoisirs[] = $objetLoisir;
        } else {
            throw new NotEnoughPlaceException();
        }
    }

    private function estRempli(): bool
    {
        return count($this->objetsLoisirs) >= $this->nbPlace;
    }
}
