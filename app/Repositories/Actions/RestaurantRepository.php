<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/06/2018
 * Time: 03.24
 */

namespace App\Repositories\Actions;


use App\Repositories\Contracts\IRestaurantRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;

class RestaurantRepository implements IRestaurantRepository
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
        // TODO: Implement showAll() method.
    }

    public function paginationData(PaginationParam $param)
    {
        // TODO: Implement paginationData() method.
    }

    public function isRestaurantNameExist($restaurantName, $id = null)
    {
        // TODO: Implement isRestaurantNameExist() method.
    }
}