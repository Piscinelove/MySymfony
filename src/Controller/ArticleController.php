<?php
/**
 * Created by PhpStorm.
 * User: iomedia
 * Date: 04.09.18
 * Time: 10:00
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route("/articles", name="articles_")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(){
        $articles = ["Why people are dumb dumb", "How to find an article name", "What to do when you have no idea"];
        return $this->render('article/index.html.twig', [
            'title' => 'Our articles',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/{id}", name="show", requirements={"id"="\d+"})
     */
    public function show($id){
        $comments = ["First comment", "Second comment", "Third comment"];



        return $this->render('article/article.html.twig', [
            'title' => 'Why people are dumb dumb',
            'author' => 'Rafael Peixoto',
            'date' => '2018-09-04',
            'id' => 'id',
            'article' => '                Donec a augue eget magna consequat sodales eget vitae libero. Nam nulla nisi, pulvinar in varius nec, volutpat vitae turpis. In eleifend scelerisque ligula, non semper dui tempor tempus. Mauris viverra magna vitae ligula scelerisque tincidunt. Duis sodales odio velit, id egestas ex molestie ut. Donec volutpat magna a lacus tincidunt volutpat. Etiam egestas ligula eu ante mattis, eget tincidunt dui facilisis. Quisque lorem est, pellentesque sed arcu a, pulvinar viverra magna.Fusce tempus placerat quam, sed accumsan ipsum imperdiet ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Morbi arcu felis, elementum at lacus ut, malesuada pulvinar erat. Vestibulum consequat elit neque, et dictum nisi dapibus vel. Maecenas laoreet nibh eu sem varius, ut auctor lorem scelerisque. Integer justo neque, vestibulum vitae egestas eget, tincidunt vel tellus. Vivamus mauris tortor, elementum non suscipit id, vulputate ac nisl. Aliquam ut diam urna. Nam et egestas tellus, sit amet maximus risus.',
            'comments' => $comments,

        ]);
    }
    /**
     * @Route("/{id}/up", name="thumbup", requirements={"id"="\d+"}, methods={'POST'})
     */
    public function toggleThumbUp($id){
        return new JsonResponse(['up'=> rand(5, 100)]);
    }
}