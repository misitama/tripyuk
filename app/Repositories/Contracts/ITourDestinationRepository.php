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
    public function isDestinationExist($destinationName,$isDomestic = 1,$country,$region = null,$city,$id = null);

    public function paginationByFilter(PaginationParam $param,$isDomestic = null,$region = null,$country = null,$city = null);

    public function showAllByArea($isDomestic);
}