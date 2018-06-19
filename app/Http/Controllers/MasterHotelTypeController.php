<?php

namespace App\Http\Controllers;

use App\Services\MasterHotelTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MasterHotelTypeController extends Controller
{
    protected $masterHotelTypeService;

    public function __construct(MasterHotelTypeService $masterHotelTypeService)
    {
        $this->masterHotelTypeService = $masterHotelTypeService;
    }

    public function pagination(){
        $param = $this->getPaginationParams();
        $result =$this->masterHotelTypeService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(){
        $result = $this->masterHotelTypeService->create(Input::all());

        return $this->getJsonResponse($result);
    }

    public function read($id){
        $result = $this->masterHotelTypeService->read($id);

        return $this->getJsonResponse($result);
    }

    public function showAll(){
        $result = $this->masterHotelTypeService->showAll();

        return $this->getJsonResponse($result);
    }

    public function update(){
        $result = $this->masterHotelTypeService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id){
        $result = $this->masterHotelTypeService->delete($id);

        return $this->getJsonResponse($result);
    }
}
