<?php

namespace App\Core;

use App\Core\Application;

  class RenderView
  {

    public static function showView($view, $params){

      return Application::$app->router->renderView($view, $params);

    }
  }
?>