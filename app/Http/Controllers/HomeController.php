<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*-------------------------------------
     * Home Page
     *
     *------------------------------------*/
    public function index()
    {
        return view('index');
    }

    /*-------------------------------------
     * Project Setup
     *
     *------------------------------------*/
    public function newProjectSetup()
    {
        return view('new-project-setup');
    }

    /*-------------------------------------
     * Version Control
     *
     *------------------------------------*/
    public function versionControl()
    {
        return view('version-control');
    }

    /*-------------------------------------
     * Laravel and PHP
     *
     *------------------------------------*/
    public function laravelAndPHP()
    {
        return view('laravel-and-php');
    }
    
}
