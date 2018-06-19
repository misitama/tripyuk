<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.27
 */

namespace App\Services;


use App\Repositories\Contracts\IDistrictRepository;
use App\Services\Response\ServiceResponseDto;

class DistrictService extends BaseService
{
    protected $districtRepository;

    public function __construct(IDistrictRepository $districtRepository)
    {
        $this->districtRepository = $districtRepository;
    }

    public function read($id){
        $response = new ServiceResponseDto();

        $result = [];
        $data = $this->districtRepository->read($id);

        for($i=0;$i<count($data);$i++){
            $result[]=[
                'id'=>$data[$i]->id,
                'label'=>$data[$i]->district_name
            ];
        }

        $response->setResult($result);

        return $response;
    }

    public function showAll(){
        return $this->getAllObject($this->districtRepository);
    }
}