<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 06/04/2018
 * Time: 15.53
 */

namespace App\Repositories\Actions;


use App\Models\TripMasterBedTypeModel;
use App\Repositories\Contracts\IMasterBedTypeRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;

class MasterBedTypeRepository implements IMasterBedTypeRepository
{

    public function create($input)
    {
        $masterBedType = new TripMasterBedTypeModel();
        $masterBedType->bed_type_name = htmlspecialchars($input['bedTypeName']);
        $masterBedType->description = htmlspecialchars($input['description']);
        $masterBedType->created_by = auth()->user()->full_name;
        $masterBedType->created_at = date('Y-m-d H:i:s');

        return $masterBedType->save();
    }

    public function update($input)
    {
        $masterBedType = TripMasterBedTypeModel::find($input['bedTypeId']);
        $masterBedType->bed_type_name = htmlspecialchars($input['bedTypeName']);
        $masterBedType->description = htmlspecialchars($input['description']);
        $masterBedType->is_active = $input['isActive'];
        $masterBedType->updated_by = auth()->user()->full_name;
        $masterBedType->updated_at = date('Y-m-d H:i:s');

        return $masterBedType->save();
    }

    public function delete($id)
    {
        return TripMasterBedTypeModel::find($id)->delete();
    }

    public function read($id)
    {
        $masterBedType = TripMasterBedTypeModel::find($id);

        return [
            'bedTypeId' => $masterBedType->id,
            'bedTypeName' => $masterBedType->bed_type_name,
            'description' => $masterBedType->description,
            'isActive' => $masterBedType->is_active,
            'createdAt'=>$masterBedType->created_at->toDateString(),
            'updatedAt'=>$masterBedType->updated_at->toDateString(),
            'createdBy'=>$masterBedType->created_by,
            'updatedBy'=>$masterBedType->updated_by
        ];
    }

    public function showAll()
    {
        $masterBedTypes = TripMasterBedTypeModel::all();
        $result = [];

        foreach ($masterBedTypes as $masterBedType) {
            $result[] = [
                'bedTypeId' => $masterBedType->id,
                'bedTypeName' => $masterBedType->bed_type_name,
                'description' => $masterBedType->description,
                'isActive' => $masterBedType->is_active,
                'createdAt'=>$masterBedType->created_at->toDateString(),
                'updatedAt'=>$masterBedType->updated_at->toDateString(),
                'createdBy'=>$masterBedType->created_by,
                'updatedBy'=>$masterBedType->updated_by
            ];
        }

        return $result;
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
        $result->setTotalCount(TripMasterBedTypeModel::count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripMasterBedTypeModel::take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripMasterBedTypeModel::skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data = TripMasterBedTypeModel::where('bed_type_name', 'like', '%' . $param->getKeyword() . '%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripMasterBedTypeModel::where('bed_type_name', 'like', '%' . $param->getKeyword() . '%')
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

    public function isNameExist($bedTypeName, $id = null)
    {
        if ($id == null) {
            $result = TripMasterBedTypeModel::where('bed_type_name', '=', htmlspecialchars($bedTypeName))->count();
        } else {
            $result = TripMasterBedTypeModel::where('bed_type_name', '=', htmlspecialchars($bedTypeName))->where('id', '<>', $id)->count();
        }

        return ($result > 0);
    }
}