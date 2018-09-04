<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController2Controller extends AbstractController
{
    /**
     * @Route("/lucky/test2")
     */
    public function index()
    {
        return $this->render('lucky_controller2/index.html.twig', [
            'controller_name' => 'LuckyController2Controller',
        ]);
    }
}
