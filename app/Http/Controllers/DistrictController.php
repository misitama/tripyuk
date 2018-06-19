<?php

namespace App\Http\Controllers;

use App\Services\DistrictService;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    protected $districtService;

    public function __construct(DistrictService $districtService)
    {
        $this->districtService = $districtService;
    }

    public function readByRegency($regencyId){
        $result = $this->districtService->read($regencyId);

        return $this->getJsonResponse($result);
    }
}
