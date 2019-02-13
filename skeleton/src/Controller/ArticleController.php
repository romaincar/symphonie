<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 13/02/2019
 * Time: 11:10
 */

namespace App\Controller;




use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @return Response
     * @Route("/")
     */
public function homepage()
{

    return new Response("TEST");

}

    /**
     * @Route("/articles/{titre}")
     */

public function show($titre){
    return new Response("Mon super article s'affiche"." ".$titre." "."s'affiche.");

}
}