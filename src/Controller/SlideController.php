<?php

namespace App\Controller;

use App\Repository\SlideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlideController extends AbstractController
{

     /**
     * @Route("/", name="slide_index", methods={"GET"})
     */
    public function index(SlideRepository $slideRepository): Response
    {
        return $this->render('slide/index.html.twig', [
            'slides' => $slideRepository->findAll(),
        ]);
    }
   
}
