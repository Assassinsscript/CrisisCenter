<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SupportCenter;
use App\Victim;
use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Post;


/**
 * Class VictimsController
 * @package App\Http\Controllers
 * @Controller(prefix="victims")
 */
class VictimsController extends Controller
{
    /**
     * @Get("index")
     */
    public function index()
    {
        $victims = Victim::paginate(20);

        return view('victims.index', compact('victims'));
    }

    /**
     * @Get("create")
     */
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

    /**
     * @Post("create")
     */
    public function store()
    {
        $this->validate($this->request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required|in:man,woman',
            'address' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'blood_type' => 'required',
            'birth_date' => 'required|date_format:d/m/Y',
            'contraindication' => 'required',
            'state' => 'required',
            'support_center_id' => 'required|exists:support_centers,id',
        ]);

        Victim::create($this->request->all());

        return redirect()->to('victims/create')->with('success', 'La victime est bien prise en charge.');
    }
}
