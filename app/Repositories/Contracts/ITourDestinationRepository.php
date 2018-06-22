<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 21.56
 */

namespace App\Repositories\Contracts;


use App\Repositories\Contracts\Pagination\PaginationParam;

interface ITourDestinationRepository extends IBaseRepository
{
    public function isDestinationExist($destinationName,$country,$city,$id = null);

    public function paginationByFilter(PaginationParam $param,$region = null,$country = null,$city);
}