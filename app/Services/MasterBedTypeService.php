<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 06/04/2018
 * Time: 16.06
 */

namespace App\Services;


use App\Repositories\Contracts\IMasterBedTypeRepository;
use App\Services\Response\ServiceResponseDto;

class MasterBedTypeService extends BaseService
{
    protected $masterBedTypeRepository;

    public function __construct(IMasterBedTypeRepository $masterBedTypeRepository)
    {
        $this->masterBedTypeRepository = $masterBedTypeRepository;
    }

    protected function isBedTypeNameExist($bedTypeName,$id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->masterBedTypeRepository->isNameExist($bedTypeName,$id));

        return $response;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $isBedTypeNameExist = $this->isBedTypeNameExist($input['bedTypeName']);

        if($isBedTypeNameExist->getResult()){
            $message = ['Bed type name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->masterBedTypeRepository->create($input)){
                $message = ['Failed to add new bed type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->masterBedTypeRepository,$id);
    }

    public function showAll(){
        return $this->getAllObject($this->masterBedTypeRepository);
    }

    public function update($input){
        $response = new ServiceResponseDto();
        $isBedTypeNameExist = $this->isBedTypeNameExist($input['bedTypeName'],$input['bedTypeId']);

        if($isBedTypeNameExist->getResult()){
            $message = ['Bed type name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->masterBedTypeRepository->update($input)){
                $message = ['Failed to update existing bed type'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->masterBedTypeRepository,$id);
    }

    public function pagination($param){
        return $this->getPaginationObject($this->masterBedTypeRepository,$param);
    }
}