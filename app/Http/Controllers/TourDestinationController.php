<?php

namespace App\Http\Controllers;

use App\Services\TourDestinationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TourDestinationController extends Controller
{
    protected $tourDestinationService;

    public function __construct(TourDestinationService $tourDestinationService)
    {
        $this->tourDestinationService = $tourDestinationService;
    }

    public function pagination(){
        $param = $this->getPaginationParams();
        $result = $this->tourDestinationService->pagination($param,Input::get('isDomestic') ,Input::get('country'),Input::get('region'),Input::get('city'));

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(){
        $result = $this->tourDestinationService->create(Input::all());

        return $this->getJsonResponse($result);
    }

    public function read($id){
        $result = $this->tourDestinationService->read($id);

        return $this->getJsonResponse($result);
    }

    public function showAll(){
        $result = $this->tourDestinationService->showAll(Input::all());

        return $this->getJsonResponse($result);
    }

    public function update(){
        $result = $this->tourDestinationService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id){
        $result = $this->tourDestinationService->delete($id);

        return $this->getJsonResponse($result);
    }
}
