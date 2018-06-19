<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 05/03/2018
 * Time: 17.04
 */

namespace App\Repositories\Contracts;


interface IRoleRepository extends IBaseRepository
{
    public function checkExistingRoleName($name,$id =null);
}