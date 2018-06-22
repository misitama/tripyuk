<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 22.08
 */

namespace App\Services;


use App\Repositories\Contracts\ITourDestinationRepository;
use App\Services\Response\ServiceResponseDto;

class TourDestinationService extends BaseService
{
    protected $tourDestinationRepository;

    public function __construct(ITourDestinationRepository $tourDestinationRepository)
    {
        $this->tourDestinationRepository = $tourDestinationRepository;
    }

    protected function isDestinationNameExist($destinationName, $country, $city, $id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->tourDestinationRepository)
    }
}