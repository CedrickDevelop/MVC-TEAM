<?php

namespace App\Controller;

use App\Core\Application;
use App\Core\Router;

class SiteController
{
 protected static Router $router;

    public static function handleContact()
    {
      var_dump($_POST);
    }

    /**
     * show page
     * @return void
     */
    public static function contact(){
        return Application::$app->router->renderView("contact");
        
    }

    /**
     * show page
     * @return void
     */
    public static function welcome(){
      $params = [
        'username' => 'toto'
      ];
    
      return Application::$app->router->renderView("welcome");
      
    }

    
}