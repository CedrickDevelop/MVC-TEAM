<?php

namespace App\Controller;


use App\Core\Router;

class SiteController
{
 protected static Router $router;

    /**
     * SiteController constructor
     */
    public function __construct(Router $router)
    {
        self::$router = $router;
    }

    public static function handleContact()
    {
      var_dump($_POST);
    }

    public static function listContact(){
        var_dump("bouh"); //
       // var_dump(self::$router);
        self::$router->renderView('contact');


    }
}