<?php


namespace App\Http\Controllers;


use Collective\Annotations\Routing\Annotations\Annotations\Get;

class HomeController extends Controller
{
    /**
     * @Get("/")
     */
    public function index()
    {
        return view('index');
    }
}