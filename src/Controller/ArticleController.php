<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-09-18
 * Time: 오전 6:49
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooo!');
    }


    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));
    }
}