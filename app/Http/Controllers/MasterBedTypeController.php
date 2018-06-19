<?php

namespace App\Http\Controllers;

use App\Services\MasterBedTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MasterBedTypeController extends Controller
{
    protected $masterBedTypeService;

    public function __construct(MasterBedTypeService $masterBedTypeService)
    {
        $this->masterBedTypeService = $masterBedTypeService;
    }

    public function pagination(){
        $param = $this->getPaginationParams();
        $result = $this->masterBedTypeService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(){
        $result = $this->masterBedTypeService->create(Input::all());

        return $this->getJsonResponse($result);
    }

    public function read($id){
        $result = $this->masterBedTypeService->read($id);

        return $this->getJsonResponse($result);
    }

    public function showAll(){
        $result = $this->masterBedTypeService->showAll();

        return $this->getJsonResponse($result);
    }

    public function update(){
        $result = $this->masterBedTypeService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id){
        $result = $this->masterBedTypeService->delete($id);

        return $this->getJsonResponse($result);
    }
}
