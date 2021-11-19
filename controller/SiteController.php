<?php

namespace App\Controller;

use App\Core\Application;
use App\Core\Router;
use App\Controller\RenderController;
class SiteController extends RenderController
{
    public static function handleContact()
    {
      var_dump($_POST);
    }

    /**
     * show page
     * @return void
     */
    public static function contact(){
        return RenderController::renderParentView("contact", $data = []);
    }

    /**
     * show page
     * @return void
     */
    public static function welcome(){
      $params = [
        'username' => 'toto',
        'email' => "allll@daada.fr"
      ];
    
      return RenderController::renderParentView("welcome", $params);
      
    }
   
}