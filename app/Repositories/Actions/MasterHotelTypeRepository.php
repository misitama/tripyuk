<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 07/04/2018
 * Time: 10.07
 */

namespace App\Repositories\Actions;


use App\Models\TripMasterHotelTypeModel;
use App\Repositories\Contracts\IMasterHotelTypeRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;

class MasterHotelTypeRepository implements IMasterHotelTypeRepository
{

    public function create($input)
    {
        $masterHotelType = new TripMasterHotelTypeModel();
        $masterHotelType->hotel_type_name = $input['hotelTypeName'];
        $masterHotelType->description = $input['description'];
        $masterHotelType->created_at = date('Y-m-d H:i:s');
        $masterHotelType->created_by = auth()->user()->full_name;

        return $masterHotelType->save();
    }

    public function update($input)
    {
        $masterHotelType = TripMasterHotelTypeModel::find($input['hotelTypeId']);
        $masterHotelType->hotel_type_name = $input['hotelTypeName'];
        $masterHotelType->description = $input['description'];
        $masterHotelType->is_active = $input['isActive'];
        $masterHotelType->updated_at = date('Y-m-d H:i:s');
        $masterHotelType->updated_by = auth()->user()->full_name;

        return $masterHotelType->save();
    }

    public function delete($id)
    {
        return MasterHotelTypeRepository::find($id)->delete();
    }

    public function read($id)
    {
        $masterHotelType = TripMasterHotelTypeModel::find($id);

        return [
            'hotelTypeId' => $masterHotelType->id,
            'hotelTypeName' => $masterHotelType->hotel_type_name,
            'description' => $masterHotelType->description,
            'isActive' => $masterHotelType->is_active,
            'createdAt' => $masterHotelType->created_at->toDateString(),
            'updatedAt' => $masterHotelType->updated_at->toDateString(),
            'createdBy' => $masterHotelType->created_by,
            'updatedBy' => $masterHotelType->updated_by
        ];
    }

    public function showAll()
    {
        $masterTypeHotels = TripMasterHotelTypeModel::all();

        $data = [];
        foreach ($masterTypeHotels as $masterTypeHotel) {
            $data[] = [
                'hotelTypeId' => $masterTypeHotel->id,
                'hotelTypeName' => $masterTypeHotel->hotel_type_name,
                'description' => $masterTypeHotel->description,
                'isActive' => $masterTypeHotel->is_active,
                'createdAt' => $masterTypeHotel->created_at->toDateString(),
                'updatedAt' => $masterTypeHotel->updated_at->toDateString(),
                'createdBy' => $masterTypeHotel->created_by,
                'updatedBy' => $masterTypeHotel->updated_by
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
        $result->setTotalCount(TripMasterHotelTypeModel::count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripMasterHotelTypeModel::take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripMasterHotelTypeModel::skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data = TripMasterHotelTypeModel::where('hotel_type_name', 'like', '%' . $param->getKeyword() . '%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripMasterHotelTypeModel::where('hotel_type_name', 'like', '%' . $param->getKeyword() . '%')
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

    public function isHotelTypeNameExist($hotelTypeName, $id = null)
    {
        if ($id == null) {
            $result = TripMasterHotelTypeModel::where('hotel_type_name', '=', $hotelTypeName)->count();
        } else {
            $result = TripMasterHotelTypeModel::where('hotel_type_name', '=', $hotelTypeName)->where('id', '<>', $id)->count();
        }

        return ($result > 0);
    }
}