<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class AppController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function randomAction($limit)
    {
        $number = rand(0, $limit);

        return $this->render('site/random.html', array(
            'number' => $number
        ));
    }
}