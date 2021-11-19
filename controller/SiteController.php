<?php

namespace App\Controller;

use App\Core\Application;
use App\Core\Router;
use App\Core\RenderView;

class SiteController 
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
      $view = RenderView::showView("contact", $params =[]);
      return $view;
    }

    /**
     * show page
     * @return void
     */
    public static function welcome(){
      $params = [
        'username' => 'toto'
      ];
      
      $view = RenderView::showView("welcome", $params);
      return $view;
      
    }



    
}