<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 07/04/2018
 * Time: 10.17
 */

namespace App\Services;


use App\Repositories\Contracts\IMasterHotelTypeRepository;
use App\Services\Response\ServiceResponseDto;

class MasterHotelTypeService extends BaseService
{
    protected $masterHotelTypeRepository;

    public function __construct(IMasterHotelTypeRepository $hotelTypeRepository)
    {
        $this->masterHotelTypeRepository = $hotelTypeRepository;
    }

    protected function isHotelTypeNameExist($hotelTypeName,$id =null){
        $response = new ServiceResponseDto();

        $response->setResult($this->masterHotelTypeRepository->isHotelTypeNameExist($hotelTypeName,$id));

        return $response;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $isHotelTypeNameExist = $this->isHotelTypeNameExist($input['hotelTypeName']);

        if($isHotelTypeNameExist->getResult()){
            $message = ['Hotel type name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->masterHotelTypeRepository->create($input)){
                $message = ['Failed to add new hotel type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->masterHotelTypeRepository,$id);
    }

    public function showAll(){
        return $this->getAllObject($this->masterHotelTypeRepository);
    }

    public function update($input){
        $response = new ServiceResponseDto();
        $isHotelTypeNameExist = $this->isHotelTypeNameExist($input['hotelTypeName'],$input['hotelTypeId']);

        if($isHotelTypeNameExist->getResult()){
            $message = ['Hotel type name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->masterHotelTypeRepository->update($input)){
                $message = ['Failed to update existing hotel type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->masterHotelTypeRepository,$id);
    }

    public function pagination($param){
        return $this->getPaginationObject($this->masterHotelTypeRepository,$param);
    }
}