<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 22.08
 */

namespace App\Services;


use App\Repositories\Contracts\ITourDestinationRepository;
use App\Services\Response\ServicePaginationResponseDto;
use App\Services\Response\ServiceResponseDto;

class TourDestinationService extends BaseService
{
    protected $tourDestinationRepository;

    public function __construct(ITourDestinationRepository $tourDestinationRepository)
    {
        $this->tourDestinationRepository = $tourDestinationRepository;
    }

    protected function isDestinationNameExist($destinationName,$isDomestic = 1 ,$country, $region = null ,$city, $id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->tourDestinationRepository->isDestinationExist($destinationName,$isDomestic,$country,$region,$city,$id));

        return $response;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $isDestinationNameExist = $this->isDestinationNameExist($input['destinationName'],$input['country'],$input['region'],$input['city']);
        if($input['isDomestic'] == 0){
            $isDestinationNameExist = $this->isDestinationNameExist($input['destinationName'],$input['isDomestic'],$input['country']);
        }

        if($isDestinationNameExist->getResult()){
            $message = ['Destination name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->tourDestinationRepository->create($input)){
                $message = ['Failed add new destination'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->tourDestinationRepository,$id);
    }

    public function showAll($isDomestic){
        $response = new ServiceResponseDto();
        $destinations = $this->tourDestinationRepository->showAllByArea($isDomestic);
        $data = [];

        foreach ($destinations as $destination){
            $data[]=[
                'id'=>$destination->id,
                'label'=>$destination->destination_name
            ];
        }

        $response->setResult($data);

        return $response;
    }

    public function update($input){
        $response = new ServiceResponseDto();
        $isDestinationNameExist = $this->isDestinationNameExist($input['destinationName'],$input['country'],$input['region'],$input['city'],$input['id']);
        if($input['isDomestic'] == 0){
            $isDestinationNameExist = $this->isDestinationNameExist($input['destinationName'],$input['isDomestic'],$input['country'],$input['id']);
        }

        if($isDestinationNameExist->getResult()){
            $message = ['Destination name already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->tourDestinationRepository->update($input)){
                $message = ['Failed add new destination'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->tourDestinationRepository,$id);
    }

    public function pagination($param,$isDomestic = null,$country = null,$region = null,$city = null){
        $response = new ServicePaginationResponseDto();

        $pagingResult = $this->tourDestinationRepository->paginationByFilter($this->parsePaginationParam($param),$isDomestic,$country,$region,$city);
        $response->setCurrentPage($param['pageIndex']);
        $response->setPageSize($param['pageSize']);
        $response->setTotalCount($pagingResult->getTotalCount());
        $response->setResult($pagingResult->getResult());

        return $response;
    }
}