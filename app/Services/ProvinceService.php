<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.24
 */

namespace App\Services;


use App\Repositories\Contracts\IProvinceRepository;

class ProvinceService extends BaseService
{
    protected $provinceRepository;

    public function __construct(IProvinceRepository $provinceRepository)
    {
        $this->provinceRepository = $provinceRepository;
    }

    public function read($id){
        return $this->readObject($this->provinceRepository,$id);
    }

    public function showAll(){
        return $this->getAllObject($this->provinceRepository);
    }
}