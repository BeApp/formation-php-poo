<?php

namespace Dvilleneuve\AppFormationPhpPoo;

class Bibliotheque
{
    /**
     * @param Etagere[] $etageres
     */
    public function __construct(
        private array $etageres
    )
    {
    }

    public function ajout(ObjetLoisir $objetLoisir)
    {
        foreach ($this->etageres as $etagere) {
            try {
                $etagere->addObjetLoisir($objetLoisir);
                return;
            } catch (NotEnoughPlaceException $e) {
            }
        }
    }

}
