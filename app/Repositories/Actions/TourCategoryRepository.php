<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 02.23
 */

namespace App\Repositories\Actions;


use App\Models\TripTourCategoryModel;
use App\Repositories\Contracts\ITourCategoryRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;

class TourCategoryRepository implements ITourCategoryRepository
{

    public function create($input)
    {
        $tourCategory = new TripTourCategoryModel();
        $tourCategory->slug = $input['slug'];
        $tourCategory->tour_category_name = $input['categoryName'];
        $tourCategory->description = $input['description'];
        $tourCategory->created_at = date('Y-m-d H:i:s');

        return $tourCategory->save();

    }

    public function update($input)
    {
        $tourCategory = TripTourCategoryModel::find($input['id']);
        $tourCategory->slug = $input['slug'];
        $tourCategory->tour_category_name = $input['categoryName'];
        $tourCategory->description = $input['description'];
        $tourCategory->is_active = $input['isActive'];
        $tourCategory->updated_at = date('Y-m-d H:i:s');

        return $tourCategory->save();
    }

    public function delete($id)
    {
        return TripTourCategoryModel::find($id)->delete();
    }

    public function read($id)
    {
        $tourCategory = TripTourCategoryModel::find($id);

        return [
            'tourCategoryId'=>$tourCategory->id,
            'slug'=>$tourCategory->slug,
            'tourCategoryName'=>$tourCategory->tour_category_name,
            'description'=>$tourCategory->description,
            'isActive'=>$tourCategory->is_active,
            'createdAt'=>$tourCategory->created_at->toDateString(),
            'updatedAt'=>$tourCategory->updated_at->toDateString()
        ];
    }

    public function showAll()
    {
        return TripTourCategoryModel::all();
    }

    public function paginationData(PaginationParam $param)
    {
        $result = new PaginationResult();


        $sortBy = ($param->getSortBy() == '' ? 'id' : $param->getSortBy());

        $sortOrder = ($param->getSortOrder() == '' ? 'asc' : $param->getSortOrder());


        //setup skip data for paging

        if ($param->getPageSize() == -1) {
            $skipCount = 0;
        } else {
            $skipCount = ($param->getPageIndex() * $param->getPageSize());
        }

        //get total count data
        $result->setTotalCount(TripTourCategoryModel::count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripTourCategoryModel::take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data =TripTourCategoryModel::skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data =TripTourCategoryModel::where('tour_category_name', 'like', '%' . $param->getKeyword() . '%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripTourCategoryModel::where('tour_category_name', 'like', '%' . $param->getKeyword() . '%')
                    ->orderBy($sortBy, $sortOrder)
                    ->skip($skipCount)->take($param->getPageSize())
                    ->get();

            }

        }


        $result->setCurrentPageIndex($param->getPageIndex());
        $result->setCurrentPageSize($param->getPageSize());
        $result->setResult($data);


        return $result;
    }

    public function isCategoryNameExist($categoryName, $id = null)
    {
       if($id == null){
           $result = TripTourCategoryModel::where('tour_category_name','=',$categoryName)->count();
       }else{
           $result = TripTourCategoryModel::where('tour_category_name','=',$categoryName)->where('id','<>',$id)->count();
       }
       
       return ($result>0);
    }

    public function readBySlug($slug)
    {
        $tourCategory = TripTourCategoryModel::where('slug','=',$slug)->first();

        return [
            'tripCategoryId'=>$tourCategory->id,
            'slug'=>$tourCategory->slug,
            'tourCategoryName'=>$tourCategory->tour_category_name,
            'createdAt'=>$tourCategory->created_at->toDateString(),
            'updated'=>$tourCategory->updated_at->toDateString()
        ];
    }


}