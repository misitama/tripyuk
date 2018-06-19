<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/03/2018
 * Time: 07.16
 */

namespace App\Repositories\Actions;


use App\Repositories\Contracts\IRegencyRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Models\TripRegencyModel;

class RegencyRepository implements IRegencyRepository
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
        return TripRegencyModel::where('province_id','=',$id)->get();

    }

    public function showAll()
    {
        return TripRegencyModel::all();
    }

    public function paginationData(PaginationParam $param)
    {
        // TODO: Implement paginationData() method.
    }
}