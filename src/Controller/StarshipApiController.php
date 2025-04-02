<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response
    {
        $logger->info('Starship collection retrieved');
        $starships = [
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
            ),
        ];

        return $this->json($starships);
    }
}