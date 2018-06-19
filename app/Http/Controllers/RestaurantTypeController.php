<?php

namespace App\Http\Controllers;

use App\Services\RestaurantTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RestaurantTypeController extends Controller
{
    protected $restaurantTypeService;

    public function __construct(RestaurantTypeService $restaurantTypeService)
    {
        $this->restaurantTypeService = $restaurantTypeService;
    }

    public function pagination(){
        $param = $this->getPaginationParams();
        $result = $this->restaurantTypeService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(){
        $result = $this->restaurantTypeService->create(Input::all());

        return $this->getJsonResponse($result);
    }

    public function read($id){
        $result = $this->restaurantTypeService->read($id);

        return $this->getJsonResponse($result);
    }

    public function showAll(){
        $result = $this->restaurantTypeService->showAll();

        return $this->getJsonResponse($result);
    }

    public function update(){
        $result = $this->restaurantTypeService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id){
        $result = $this->restaurantTypeService->delete($id);

        return $this->getJsonResponse($result);
    }
}
