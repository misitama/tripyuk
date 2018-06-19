<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 08/06/2018
 * Time: 01.11
 */

namespace App\Repositories\Actions;


use App\Repositories\Contracts\IRestaurantTypeRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;
use App\Models\TripRestaurantTypeModel;

class RestaurantTypeRepository implements IRestaurantTypeRepository
{

    public function create($input)
    {
        $restaurantType = new TripRestaurantTypeModel();
        $restaurantType->restaurant_type_name = $input['restaurantTypeName'];
        $restaurantType->description = $input['description'];
        $restaurantType->created_at = date('Y-m-d H:i:s');

        return $restaurantType->save();
    }

    public function update($input)
    {
        $restaurantType = TripRestaurantTypeModel::find($input['id']);
        $restaurantType->restaurant_type_name = $input['restaurantTypeName'];
        $restaurantType->description = $input['description'];
        $restaurantType->updated_at = date('Y-m-d H:i:s');

        return $restaurantType->save();
    }

    public function delete($id)
    {
        return TripRestaurantTypeModel::find($id)->delete();
    }

    public function read($id)
    {
        $restaurantType = TripRestaurantTypeModel::find($id);

        return [
            'restaurantTypeId'=>$restaurantType->id,
            'restaurantTypeName'=>$restaurantType->restaurant_type_name,
            'description'=>$restaurantType->description,
            'createdAt'=>$restaurantType->created_at->toDateString(),
            'updatedAt'=>$restaurantType->updated_at->toDateString()
        ];
    }

    public function showAll()
    {
        $restaurantTypes = TripRestaurantTypeModel::all();
        $data = [];
        foreach ($restaurantTypes as $restaurantType) {
            $data[]=[
                'id'=>$restaurantType->id,
                'label'=>$restaurantType->restaurant_type_name,
            ];
        }

        return $data;
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
        $result->setTotalCount(TripRestaurantTypeModel::count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripRestaurantTypeModel::take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data =TripRestaurantTypeModel::skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data =TripRestaurantTypeModel::where('restaurant_type_name', 'like', '%' . $param->getKeyword() . '%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripRestaurantTypeModel::where('restaurant_type_name', 'like', '%' . $param->getKeyword() . '%')
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

    public function isRestaurantTypeNameExist($typeName, $id = null)
    {
        if($id == null){
            $result = TripRestaurantTypeModel::where('restaurant_type_name','=',$typeName)->count();
        }else{
            $result = TripRestaurantTypeModel::where('restaurant_type_name','=',$typeName)->where('id','<>',$id)->count();
        }

        return ($result>0);
    }
}