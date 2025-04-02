<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }
    public function findAll(): array
    {
         $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                1,
                'Millennium Falcon',
                'Garden',
                'Jean-Luc Pickles',
                'under construction',
            ),
            new Starship(
                2,
                'USS Enterprise',
                'Starship',
                'Jean-Luc Picard',
                'in service',
            ),
            new Starship(
                3,
                'TARDIS',
                'Time Machine',
                'The Doctor',
                'in service',
            )
        ];
    }
}