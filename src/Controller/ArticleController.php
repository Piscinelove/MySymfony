<?php
/**
 * Created by PhpStorm.
 * User: iomedia
 * Date: 04.09.18
 * Time: 10:00
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route("/articles", name="articles_")
 */
class ArticleController
{
    /**
     * @Route("/", name="index")
     */
    public function index(){
        return new Response('index');
    }

    /**
     * @Route("/{article}", name="show", requirements={"article"="\d+"})
     */
    public function show($article){
        return new Response($article);
    }
}