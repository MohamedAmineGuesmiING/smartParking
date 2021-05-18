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
    public function index(DataParkingRepository $repo): Response
    {
        return $this->render('Data/index.html.twig', [
            'controller_name' => 'TestController',
            'data' => $repo->find(1) 
        ]);
    }

    /**
     * @Route("/data/{id}", name="data")
     */
    public function getNbMAx(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        return $this->json(["nbMax" => $dataParking->getMaxVoiture() ], 201, []); 
    }

    /**
     * @Route("/entrer/{id}", name="entrerPArking")
     */
    public function entrer(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        $dataParking->setNbVoiture($dataParking->getNbVoiture()+1);
        $this->getDoctrine()->getManager()->persist($dataParking);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(["done" => True ], 201, []); 
    }

    /**
     * @Route("/sortir/{id}", name="sortieParking")
     */
    public function sortir(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        $dataParking->setNbVoiture($dataParking->getNbVoiture()-1);
        $this->getDoctrine()->getManager()->persist($dataParking);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(["done" => True ], 201, []); 
    }

    /**
     * @Route("/reset/{id}", name="resetParking")
     */
    public function reset(DataParking $dataParking = null, DataParkingRepository $repo)
    {
        $dataParking->setNbVoiture(0);
        $this->getDoctrine()->getManager()->persist($dataParking);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(["done" => True ], 201, []); 
    }

    /**
     * @Route("/getEnter/{id}", name="getEnter")
     */
     public function enter(DataParking $dataParking = null)
     {
         return $this->json(["nb" => $dataParking->getEnter()  ], 201, []); 
     }

}
