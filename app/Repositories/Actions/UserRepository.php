<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 05/03/2018
 * Time: 17.29
 */

namespace App\Repositories\Actions;


use App\Models\TripUserModel;
use App\Repositories\Contracts\IUserRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUserRepository
{
    public function create($input)
    {
        $user = new TripUserModel();
        $user->role_id = $input['roleId'];
        $user->full_name = $input['fullName'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->phone = $input['phone'];
        $user->mobile_phone = $input['mobilePhone'];
        $user->address = $input['address'];
        $user->sex = $input['sex'];
        $user->province_id = $input['provinceId'];
        $user->regency_id = $input['regencyId'];
        $user->district_id = $input['districtId'];
        $user->activation_key = $input['activationKey'];
        $user->created_by = auth()->user()->full_name;
        $user->created_at = date('Y-m-d H:i:s');
        $user->is_active = intval($input['isActive']);
        $user->is_blocked = intval($input['isBlocked']);

        return $user->save();
    }

    public function update($input)
    {
        $user = TripUserModel::find($input['userId']);
        $user->role_id = $input['roleId'];
        $user->full_name = $input['fullName'];
        $user->phone = $input['phone'];
        $user->mobile_phone = $input['mobilePhone'];
        $user->address = $input['address'];
        $user->sex = $input['sex'];
        $user->province_id = $input['provinceId'];
        $user->regency_id = $input['regencyId'];
        $user->district_id = $input['districtId'];
        $user->last_modified_by = auth()->user()->full_name;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->is_active = intval($input['isActive']);
        $user->is_blocked = intval($input['isBlocked']);

        return $user->save();
    }

    public function delete($id)
    {
        return TripUserModel::find($id)->delete();
    }

    public function read($id)
    {
        $user =  TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
            ->join('trip_provincies','trip_provincies.id','=','trip_user.province_id')
            ->join('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
            ->join('trip_districts','trip_districts.id','=','trip_user.district_id')
            ->select('trip_user.id','trip_user.full_name','trip_user.email','trip_user.sex','trip_user.phone','trip_user.mobile_phone','trip_user.address',
                'trip_user.address','trip_user.is_active','trip_user.is_blocked','trip_user.created_at','trip_user.created_by','trip_user.updated_at',
                'trip_user.last_modified_by','trip_role.id as roleId','trip_role.name','trip_provincies.id as provinceId','trip_provincies.province_name',
                'trip_regencies.id as regencyId','trip_regencies.regency_name','trip_districts.id as districtId','trip_districts.district_name')
            ->where('trip_user.id','=',$id)
            ->orWhere('trip_user.email','=',$id)
            ->first();
        return [
            'userId'=>$user->id,
            'fullName'=>$user->full_name,
            'email'=>$user->email,
            'sex'=>$user->sex,
            'roleId'=>$user->roleId,
            'roleName'=>$user->name,
            'phone'=>$user->phone,
            'mobilePhone'=>$user->mobile_phone,
            'provinceId'=>$user->provinceId,
            'regencyId'=>$user->regencyId,
            'districtId'=>$user->districtId,
            'provinceName'=>$user->province_name,
            'regencyName'=>$user->regency_name,
            'districtName'=>$user->district_name,
            'address'=>$user->address,
            'isActive'=>$user->is_active,
            'isBlocked'=>$user->is_blocked,
            'createdAt'=>$user->created_at->toDateString(),
            'updatedAt'=>$user->updated_at->toDateString(),
            'createdBy'=>$user->created_by,
            'lastModifiedBy'=>$user->last_modified_by
        ];
    }

    public function showAll()
    {
        return TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
            ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
            ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
            ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
            ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
            ->get();
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

        $result->setTotalCount(TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
            ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
            ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
            ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
            ->count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data =TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data =TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_user.full_name', 'like', '%' . $param->getKeyword() . '%')
                    ->orWhere('trip_provincies.province_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_regencies.regency_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_districts.district_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_role.name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_user.address','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_user.sex','like','%'.$param->getKeyword().'%')
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_user.full_name', 'like', '%' . $param->getKeyword() . '%')
                    ->orWhere('trip_provincies.province_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_regencies.regency_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_districts.district_name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_role.name','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_user.address','like','%'.$param->getKeyword().'%')
                    ->orWhere('trip_user.sex','like','%'.$param->getKeyword().'%')
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

    public function paginationByUserLevel(PaginationParam $param, $userLevel)
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

        $result->setTotalCount(TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
            ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
            ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
            ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
            ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
            ->where('trip_role.name','=',$userLevel)
            ->count());


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {

                $data = TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_role.name','=',$userLevel)
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data =TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_role.name','=',$userLevel)
                    ->skip($skipCount)->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            }

        } else {

            if ($skipCount == 0) {

                $data =TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_role.name','=',$userLevel)
                    ->where(function ($q)use($param){
                        $q->where('trip_user.full_name', 'like', '%' . $param->getKeyword() . '%')
                            ->orWhere('trip_provincies.province_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_regencies.regency_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_districts.district_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_role.name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_user.address','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_user.sex','like','%'.$param->getKeyword().'%');
                    })
                    ->take($param->getPageSize())
                    ->orderBy($sortBy, $sortOrder)
                    ->get();

            } else {

                $data = TripUserModel::join('trip_role','trip_role.id','=','trip_user.role_id')
                    ->leftJoin('trip_provincies','trip_provincies.id','=','trip_user.province_id')
                    ->leftJoin('trip_regencies','trip_regencies.id','=','trip_user.regency_id')
                    ->leftJoin('trip_districts','trip_districts.id','=','trip_user.district_id')
                    ->select('trip_user.*','trip_role.name','trip_provincies.province_name','trip_regencies.regency_name','trip_districts.district_name')
                    ->where('trip_role.name','=',$userLevel)
                    ->where(function ($q)use($param){
                        $q->where('trip_user.full_name', 'like', '%' . $param->getKeyword() . '%')
                            ->orWhere('trip_provincies.province_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_regencies.regency_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_districts.district_name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_role.name','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_user.address','like','%'.$param->getKeyword().'%')
                            ->orWhere('trip_user.sex','like','%'.$param->getKeyword().'%');
                    })
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

    public function checkUserBlocked($email)
    {
        $result = TripUserModel::where('email','=',$email)->value('is_blocked');

        return ($result==1);
    }

    public function checkUserActive($email)
    {
        $result = TripUserModel::where('email','=',$email)->value('is_active');

        return ($result==1);
    }

    public function checkExistEmail($email, $id = null)
    {
        if($id == null){
            $result = TripUserModel::where('email','=',$email)->count();
        }else{
            $result = TripUserModel::where('email','=',$email)->where('id','<>',$id)->count();
        }

        return ($result>0);
    }

    public function checkUserPassword($email, $password)
    {
        $hashedPassword = TripUserModel::where('email','=',$email)->value('password');

        return (Hash::check($password,$hashedPassword));
    }

    public function changePassword($email, $password)
    {
        return TripUserModel::where('email','=',$email)->update(['password'=>bcrypt($password)]);
    }

    public function lastVisitedLog($email)
    {
        date_default_timezone_set('Asia/Jakarta');
        return TripUserModel::where('email','=',$email)->update(['last_visit_datetime'=>date('Y-m-d h:s:m')]);
    }

    public function setActiveUser($email, $isActive)
    {
       return TripUserModel::where('email','=',$email)->update(['is_active'=>$isActive]);
    }

    public function setBlockUser($email, $isBlocked)
    {
        return TripUserModel::where('email','=',$email)->update(['is_blocked'=>$isBlocked]);
    }

    public function checkActivationCode($email, $activationCode)
    {
        $hashedActivationCode = TripUserModel::where('email','=',$email)->value('activation_key');

        return Hash::check($activationCode,$hashedActivationCode);
    }

    public function flushactivationKey($email)
    {
        return TripUserModel::where('email',$email)->update(['activation_key'=>'']);
    }
}