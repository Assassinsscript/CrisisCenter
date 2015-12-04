<?php

namespace App\Http\Controllers;

use App\Http\Services\CDiscountAPI;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** @var Request */
    protected $request;
    /** @var CDiscountAPI */
    protected $cdiscount;

    public function __construct(Request $request, CDiscountAPI $cdiscount)
    {
        $this->request = $request;
        $this->cdiscount = $cdiscount;
    }
}
