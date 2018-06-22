<?php

namespace App\Http\Controllers;

use App\Services\TourCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TourCategoryController extends Controller
{
    protected $tourCategoryService;

    public function __construct(TourCategoryService $tourCategoryService)
    {
        $this->tourCategoryService = $tourCategoryService;
    }

    public function pagination(){
        $param = $this->getPaginationParams();
        $result = $this->tourCategoryService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(){
        $result = $this->tourCategoryService->create(Input::all());

        return $this->getJsonResponse($result);
    }

    public function read($id){
        $result = $this->tourCategoryService->read($id);

        return $this->getJsonResponse($result);
    }

    public function readBySlug($slug){
        $result = $this->tourCategoryService->readBySlug($slug);

        return $this->getJsonResponse($result);
    }

    public function showAll(){
        $result = $this->tourCategoryService->showAll();

        return $this->getJsonResponse($result);
    }

    public function select2Show(){
        $result = $this->tourCategoryService->select2Show();

        return $this->getJsonResponse($result);
    }

    public function update(){
        $result = $this->tourCategoryService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id){
        $result = $this->tourCategoryService->delete($id);

        return $this->getJsonResponse($result);
    }
}
