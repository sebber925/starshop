<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
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
                StarshipStatusEnum::IN_PROGRESS,
            ),
            new Starship(
                2,
                'USS Enterprise',
                'Starship',
                'Jean-Luc Picard',
                StarshipStatusEnum::COMPLETED,
            ),
            new Starship(
                3,
                'TARDIS',
                'Time Machine',
                'The Doctor',
                StarshipStatusEnum::WAITING,
            )
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}