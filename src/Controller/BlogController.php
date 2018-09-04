<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BlogController
 * @package App\Controller
 * @Route("/products", name="products_")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Route("/list", name="list")
     */
    public function index(){
        return new Response('index');
    }

    /**
     * @Route("/{productNumber}", name="show", requirements={"productNumber"="\d+"})
     */
    public function show($productNumber){
        return new Response($productNumber);
    }
}
