<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view("index");
        //
    }

    public function form ()
    {
        return view("form");
    }

    public function pricing ()
    {
        return view("pricing");
    }
    public function carousel ()
    {
        return view("carousel");
    }
    public function projectProgress ()
    {
        return view("project-progress");
    }
}
