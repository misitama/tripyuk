<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 06/04/2018
 * Time: 15.52
 */

namespace App\Repositories\Contracts;


interface IMasterBedTypeRepository extends IBaseRepository
{
    public function isNameExist($bedTypeName,$id =null);
}