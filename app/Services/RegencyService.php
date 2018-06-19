<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.25
 */

namespace App\Services;


use App\Repositories\Contracts\IRegencyRepository;
use App\Services\Response\ServiceResponseDto;

class RegencyService extends BaseService
{
    protected $regencyRepository;

    public function __construct(IRegencyRepository $regencyRepository)
    {
        $this->regencyRepository = $regencyRepository;
    }

    public function read($id){
        $response = new ServiceResponseDto();
        $data = $this->regencyRepository->read($id);

        for($i=0;$i<count($data);$i++){
            $result[]=[
                'id'=>$data[$i]->id,
                'label'=>$data[$i]->regency_name
            ];
        }

        $response->setResult($result);

        return $response;
    }

    public function showAll(){
        return $this->getAllObject($this->regencyRepository);
    }
}