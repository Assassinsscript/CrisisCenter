<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SupportCenter;
use App\Victim;

class VictimsController extends Controller
{
    public static function routes($router)
    {

        //index victims
        $router->get('index', [
            'uses' => 'VictimsController@index',
            'as'   => 'victims.index',
        ]);

        //create victims
        $router->get('create', [
            'uses' => 'VictimsController@create',
            'as'   => 'victims.create',
        ]);

        //store victims
        $router->get('store', [
            'uses' => 'VictimsController@store',
            'as'   => 'victims.store',
        ]);
    }

    public function index()
    {
        $victims = Victim::paginate(20);

        return view('victims.index', compact('victims'));
    }

    public function create()
    {
        $victim = new Victim();
        $cities = [
            'bordeaux' => 'Bordeaux',
            'madrid'   => 'Madrid',
        ];
        $countries = [
            'france'  => 'France',
            'Espagne' => 'Espagne',
        ];

        $bloodsType = [
            'O-'  => 'O-',
            'A-'  => 'A-',
            'AB-' => 'AB-',
            'B-'  => 'B-',
            'B+'  => 'B+',
            'AB+' => 'AB+',
            'A+'  => 'A+',
            'O+'  => 'O+',
        ];

        $states = [
            'dead' => 'Mort',
            'hurt' => 'Bléssé',
            'waiting' => 'Attente',
        ];

        $supportCenter = SupportCenter::lists('name', 'id');


        return view('victims.create', compact('victim', 'cities', 'countries', 'bloodsType', 'states', 'supportCenter'));
    }

    public function store(Requests $requests)
    {

    }
}
