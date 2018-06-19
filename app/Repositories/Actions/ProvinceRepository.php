<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.15
 */

namespace App\Repositories\Actions;


use App\Models\TripProvinceModel;
use App\Repositories\Contracts\IProvinceRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;

class ProvinceRepository implements IProvinceRepository
{


    public function create($input)
    {
        // TODO: Implement create() method.
    }

    public function update($input)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function read($id)
    {
        // TODO: Implement read() method.
    }

    public function showAll()
    {
        $provinces = TripProvinceModel::all();
        $data=[];
        foreach ($provinces as $province) {
            $data[]=[
                'id'=>$province->id,
                'label'=>$province->province_name
            ];
        }

        return $data;
    }

    public function paginationData(PaginationParam $param)
    {
        // TODO: Implement paginationData() method.
    }
}