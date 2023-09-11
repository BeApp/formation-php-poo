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

    public function ajout(Livre $livre)
    {
        foreach ($this->etageres as $etagere) {
            try {
                $etagere->addLivre($livre);
                return;
            } catch (NotEnoughPlaceException $e) {
            }
        }
    }

}
