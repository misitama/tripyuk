<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/06/2018
 * Time: 01.11
 */

namespace App\Services;


use App\Repositories\Contracts\IRestaurantTypeRepository;
use App\Services\Response\ServiceResponseDto;

class RestaurantTypeService extends BaseService
{
    protected $restaurantTypeRepository;

    public function __construct(IRestaurantTypeRepository $restaurantTypeRepository)
    {
        $this->restaurantTypeRepository = $restaurantTypeRepository;
    }


    protected function isRestaurantTypeNameExist($typeName,$id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->restaurantTypeRepository->isRestaurantTypeNameExist($typeName,$id));

        return $response;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $isRestaurantTypeNameExist = $this->isRestaurantTypeNameExist($input['restaurantTypeName']);

        if($isRestaurantTypeNameExist->getResult()){
            $message = ['Restaurant type data already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->restaurantTypeRepository->create($input)){
                $message = ['Failed add new restaurant type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->restaurantTypeRepository,$id);
    }

    public function showAll(){
        return $this->getAllObject($this->restaurantTypeRepository);
    }

    public function update($input){
        $response = new ServiceResponseDto();
        $isRestaurantTypeNameExist = $this->isRestaurantTypeNameExist($input['restaurantTypeName'],$input['id']);

        if($isRestaurantTypeNameExist->getResult()){
            $message = ['Restaurant type data already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->restaurantTypeRepository->update($input)){
                $message = ['Failed update existing restaurant type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->restaurantTypeRepository,$id);
    }

    public function pagination($param){
        return $this->getPaginationObject($this->restaurantTypeRepository,$param);
    }
}