<?php

namespace App\Controller;

use App\Entity\DataParking;
use App\Repository\DataParkingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(): Response
    {
        return $this->render('Data/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/dataNbmax/{id}", name="existPlace")
     */
    public function getData(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        return $this->json(["nbMax" => $dataParking->getMaxVoiture() ], 201, []); 
    }

    /**
     * @Route("/entrer/{id}", name="existPlace")
     */
    public function entrer(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        $dataParking->setNbVoiture($dataParking->getNbVoiture()+1);
        return $this->json(["done" => True ], 201, []); 
    }

    /**
     * @Route("/sortir/{id}", name="existPlace")
     */
    public function sortir(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        $dataParking->setNbVoiture($dataParking->getNbVoiture()+1);
        return $this->json(["done" => True ], 201, []); 
    }

}
