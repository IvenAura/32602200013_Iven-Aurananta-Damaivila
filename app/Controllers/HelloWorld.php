<?php

namespace App\Controllers;

USE CodeIgniter\Controller;

class HelloWorld extends BaseController
{
    public function halodunia()
    {
        return '<h1>Hello World</h1>';
    }
}

