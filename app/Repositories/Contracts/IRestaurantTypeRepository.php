<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/06/2018
 * Time: 01.10
 */

namespace App\Repositories\Contracts;


interface IRestaurantTypeRepository extends IBaseRepository
{
    public function isRestaurantTypeNameExist($typeName,$id =null);
}