<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 05/03/2018
 * Time: 17.19
 */

namespace App\Repositories\Actions;


use App\Models\TripRoleModel;
use App\Repositories\Contracts\IRoleRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;

class RoleRepository implements IRoleRepository
{

    public function create($input)
    {
        $role = new TripRoleModel();
        $role->name = $input['name'];
        $role->description = $input['description'];
        $role->created_at = date('Y-m-d h:m:s');
        $role->created_by = auth()->user()->full_name;

        return $role->save();
    }

    public function update($input)
    {
        $role = TripRoleModel::find($input['id']);
        $role->name = $input['name'];
        $role->description = $input['description'];
        $role->updated_at = date('Y-m-d h:m:s');
        $role->last_modified_by = auth()->user()->full_name;

        return $role->save();
    }

    public function delete($id)
    {
        return TripRoleModel::find($id)->delete();
    }

    public function read($id)
    {
        $roles = TripRoleModel::find($id);

        return [
            'roleId'=>$roles->id,
            'roleName'=>$roles->name,
            'description'=>$roles->description,
            'createdAt'=>$roles->created_at->toDateString(),
            'updatedAt'=>$roles->updated_at->toDateString(),
            'lastModifiedBy'=>$roles->last_modified_by,
            'createdBy'=>$roles->created_by
        ];
    }

    public function showAll()
    {
        $roles =  TripRoleModel::all();
        $data = [];
        foreach ($roles as $role){
            $data[]=[
                'id'=>$role->id,
                'label'=>$role->name
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
        $result->setTotalCount(TripRoleModel::count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripRoleModel::take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data =TripRoleModel::skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data =TripRoleModel::where('name', 'like', '%' . $param->getKeyword() . '%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripRoleModel::where('name', 'like', '%' . $param->getKeyword() . '%')
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

    public function checkExistingRoleName($name, $id = null)
    {
        if($id == null){
            $result = TripRoleModel::where('name','=',$name)->count();
        }else{
            $result = TripRoleModel::where('name','=',$name)->where('id','<>',$id)->count();
        }

        return ($result>0);
    }
}