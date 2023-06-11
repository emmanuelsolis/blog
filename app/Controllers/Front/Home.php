<?php

namespace App\Controllers\Front;
use App\Controllers\BaseController;

use App\Libraries\Codigo;

class Home extends BaseController
{
    public function index() {
   
        return view('welcome_message');
    }

    public function sayHola() {
        $instance = new Codigo ;
        echo $instance->sayHola();
    }
}
