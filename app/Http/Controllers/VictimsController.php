<?php

namespace App\Http\Controllers;

use App\Victim;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VictimsController extends Controller
{
    public static function routes($router)
    {

        //index victims
        $router->get('index', [
            'uses' => 'VictimsController@index',
            'as' => 'victims.index',
        ]);

        //create victims
        $router->get('create', [
            'uses' => 'VictimsController@create',
            'as' => 'victims.create',
        ]);
    }

    public function index()
    {

    }

    public function create()
    {
        $victim = new Victim();

        return view('victims.create', compact('victim'));
    }
}
