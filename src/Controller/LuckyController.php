<?php
/**
 * Created by PhpStorm.
 * User: iomedia
 * Date: 03.09.18
 * Time: 12:09
 */

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("lucky")
     */
    public function index(){
        $numbers = array();
        for($i = 0; $i < 10; $i++)
        {
            array_push($numbers, rand(0,100));
        }

        //return new Response('<html><body> Lucky : '.$number.'</body></html>');
        return $this->render('lucky/index.html.twig', ['numbers' => $numbers]);
    }

}