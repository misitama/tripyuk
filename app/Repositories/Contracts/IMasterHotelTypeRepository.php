<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 07/04/2018
 * Time: 10.06
 */

namespace App\Repositories\Contracts;


interface IMasterHotelTypeRepository extends IBaseRepository
{
    public function isHotelTypeNameExist($hotelTypeName,$id =null);
}