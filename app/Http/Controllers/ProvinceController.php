<?php

namespace App\Http\Controllers;

use App\Services\ProvinceService;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    protected $provinceService;

    public function __construct(ProvinceService $provinceService)
    {
        $this->provinceService = $provinceService;
    }

    public function showAll(){
        $result = $this->provinceService->showAll();

        return $this->getJsonResponse($result);
    }
}
