<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 02.22
 */

namespace App\Repositories\Contracts;


interface ITourCategoryRepository extends IBaseRepository
{
    public function isCategoryNameExist($categoryName,$id = null);

    public function readBySlug($slug);
}