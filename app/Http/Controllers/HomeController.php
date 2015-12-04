<?php


namespace App\Http\Controllers;


use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Middleware;

/**
 * @Middleware("auth")
 */
class HomeController extends Controller
{
    /**
     * @Get("/")
     */
    public function index()
    {

        $categories = [
            '' => 'Pansement'
        ];

        return view('Home.index', compact('categories'));
    }
}