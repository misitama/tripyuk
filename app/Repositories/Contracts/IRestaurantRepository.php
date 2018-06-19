<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/06/2018
 * Time: 03.23
 */

namespace App\Repositories\Contracts;


interface IRestaurantRepository extends IBaseRepository
{
    public function isRestaurantNameExist($restaurantName,$id = null);
}