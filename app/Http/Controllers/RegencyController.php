<?php

namespace App\Http\Controllers;

use App\Services\RegencyService;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    protected $regencyService;

    public function __construct(RegencyService $regencyService)
    {
        $this->regencyService= $regencyService;
    }

    public function readByProvince($provinceId){
        $result = $this->regencyService->read($provinceId);

        return $this->getJsonResponse($result);
    }
}
