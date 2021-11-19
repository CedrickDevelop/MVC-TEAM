<?php

namespace App\Controller;

use App\Core\Application;


abstract class RenderController 
{   
    
    public static function renderParentView($view, $data = [])
    {
        return Application::$app->router->renderView($view, $data);
    }
}