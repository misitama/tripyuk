<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.18
 */

namespace App\Repositories\Actions;


use App\Repositories\Contracts\IDistrictRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Models\TripDistrictModel;

class DistrictRepository implements IDistrictRepository
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
        return TripDistrictModel::where('regency_id','=',$id)->get();
    }

    public function showAll()
    {
        return TripDistrictModel::all();
    }

    public function paginationData(PaginationParam $param)
    {
        // TODO: Implement paginationData() method.
    }
}