<?php

namespace App\Controller;

use App\Model\Data;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{

    #[Route('/api')]
    public function getCollection(): Response
    {

        $data = [
            new Data(
                1,
                'Raziel',
                25
            ),
            new Data(
                1,
                'Raziel',
                25
            )
        ];

        return $this->json($data);
    }
}
