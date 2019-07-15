<?php


namespace App\Config;


use App\Model\Entity\Post;
use  Core\Router\AbstractRoutes;
use  Core\Router\Route;

class Routes extends AbstractRoutes
{
    /**
     * @return Route[] Liste des routes
     */
    public function getRoutes(): array
    {

        return[
          new Route('homepage', 'Post', 'homePage'),
            new Route('autobiographie', 'Default', 'autobio'),
            new Route('chapitres', 'Post',  'list'),
            new Route('connection', 'Admin\\Security', 'connection'),
            new Route('administration', 'Default', 'adminHomepage'),
            new Route('messages', 'Contact', 'listMessages'),
            new Route('chapitresAdmin', 'Post', 'listAdmin'),
            new Route('newPost','Post','newPost'),
            new Route('listcomment', 'Comment','listConmment'),
            new Route('contact','Contact','sendMessage'),
            new Route('error404','Default','error404'),
            new Route('error504','Default','error504')
        ];
    }

}