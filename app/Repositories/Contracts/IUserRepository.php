<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 05/03/2018
 * Time: 16.49
 */

namespace App\Repositories\Contracts;


use App\Repositories\Contracts\Pagination\PaginationParam;

interface IUserRepository extends IBaseRepository
{
    public function paginationByUserLevel(PaginationParam $param,$userLevel);

    public function checkUserBlocked($email);

    public function checkUserActive($email);

    public function checkExistEmail($email,$id = null);

    public function checkUserPassword($email,$password);

    public function changePassword($email,$password);

    public function lastVisitedLog($email);

    public function setActiveUser($email,$isActive);

    public function setBlockUser($email,$isBlocked);

    public function checkActivationCode($email,$activationCode);

    public function flushactivationKey($email);
}