<?php

namespace App\Http\Controllers;

use App\Services\ApiDarmawisataServices\DarmawisataAirlineApiServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApiDarmawisataController extends Controller
{
    protected $apiDarmawisataService;

    public function __construct(DarmawisataAirlineApiServices $apiDarmawisataService)
    {
        $this->apiDarmawisataService = $apiDarmawisataService;
    }

    public function getAirLineList(){
        $result = $this->apiDarmawisataService->getAirLineList();

        return $this->getJsonResponse($result);
    }

    public function getNationalityList(){
        $result = $this->apiDarmawisataService->getAirLineNationality();

        return $this->getJsonResponse($result);
    }

    public function getAirLineRoutes(){
        $result = $this->apiDarmawisataService->getAirlineRoutes(Input::get('airLineId'));

        return $this->getJsonResponse($result);
    }

    public function getAirLineSchedule(){
        $result = $this->apiDarmawisataService->getAirlineSchedule(Input::all());

        return $this->getJsonResponse($result);
    }

    public function getAddOnBaggageMeals(){
        $result = $this->apiDarmawisataService->getAddonBaggagesMeals(Input::all());

        return $this->getJsonResponse($result);
    }

    public function getAddOnSeats(){
        $result = $this->apiDarmawisataService->getAddonSeats(Input::all());

        return $this->getJsonResponse($result);
    }

    public function getAirlinePrice(){
        $result = $this->apiDarmawisataService->getAirLinePrices(Input::all());

        return $this->getJsonResponse($result);
    }

    public function setBooking(){

    }

}
