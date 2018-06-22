<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 02.24
 */

namespace App\Services;


use App\Repositories\Contracts\ITourCategoryRepository;
use App\Services\Response\ServiceResponseDto;

class TourCategoryService extends BaseService
{
    protected $tourCategoryRepository;

    public function __construct(ITourCategoryRepository $tourCategoryRepository)
    {
        $this->tourCategoryRepository = $tourCategoryRepository;
    }

    protected function isCategoryNameExist($categoryName,$id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->tourCategoryRepository->isCategoryNameExist($categoryName,$id));

        return $response;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $isCategoryNameExist = $this->isCategoryNameExist($input['categoryName']);

        if($isCategoryNameExist->getResult()){
            $message = ['Tour category already exist'];
            $response->addErrorMessage($message);
        }else{
           if(!$this->tourCategoryRepository->create($input)){
               $message = ['Failed add new tour category'];
               $response->addErrorMessage($message);
           }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->tourCategoryRepository,$id);
    }

    public function showAll(){
        $response = new ServiceResponseDto();
        $data = [];
        $tourCategories = $this->tourCategoryRepository->showAll();

        foreach ($tourCategories as $tourCategory) {
            $data[]=[
                'slug'=>$tourCategory->slug,
                'tourCategoryName'=>$tourCategory->tour_category_name,
                'createdAt'=>$tourCategory->created_at->toDateString(),
                'updated'=>$tourCategory->updated_at->toDateString()
            ];
        }

        $response->setResult($data);

        return $response;
    }

    public function select2Show(){
        $response = new ServiceResponseDto();
        $data = [];
        $tourCategories = $this->tourCategoryRepository->showAll();

        foreach ($tourCategories as $tourCategory) {
            $data[]=[
                'id'=>$tourCategory->id,
                'label'=>$tourCategory->tour_category_name
            ];
        }

        $response->setResult($data);

        return $response;
    }

    public function readBySlug($slug){
        $response = new ServiceResponseDto();

        $response->setResult($this->tourCategoryRepository->readBySlug($slug));

        return $response;
    }

    public function update($input){
        $response = new ServiceResponseDto();
        $isCategoryNameExist = $this->isCategoryNameExist($input['categoryName'],$input['id']);

        if($isCategoryNameExist->getResult()){
            $message = ['Tour category already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->tourCategoryRepository->update($input)){
                $message = ['Failed edit current tour category'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->tourCategoryRepository,$id);
    }

    public function pagination($param){
        return $this->getPaginationObject($this->tourCategoryRepository,$param);
    }
}