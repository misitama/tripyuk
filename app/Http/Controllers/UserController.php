<?php

/*
	Use Username Space Here
*/
namespace App\Http\Controllers;

/*
	Call Model Here
*/

use App\Models\TripUserModel;
use App\Models\TripRoleModel;


/*
	Call Another Function  you want to use
*/
use App\Services\DistrictService;
use App\Services\ProvinceService;
use App\Services\RegencyService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Auth;
use Validator;
use Crypt;
use URL;
use Image;
use Session;
use File;


class UserController extends Controller
{
    protected $userService;
    protected $provinceService;
    protected $regencyService;
    protected $districtService;
    protected $roleService;

    public function __construct(UserService $userService, ProvinceService $provinceService, RegencyService $regencyService, DistrictService $districtService,
                                RoleService $roleService)
    {
        $this->userService = $userService;
        $this->provinceService = $provinceService;
        $this->regencyService = $regencyService;
        $this->districtService = $districtService;
        $this->roleService = $roleService;
    }


    public function index(Request $request)
    {
        $province = $this->provinceService->showAll()->getResult();
        $regency = $this->regencyService->showAll()->getResult();
        $district = $this->districtService->showAll()->getResult();
        $role = $this->roleService->showAll()->getResult();

        return view('backoffice.user.index')
            ->with('province', $province)
            ->with('regency', $regency)
            ->with('district', $district)
            ->with('role',$role);
    }


    public function pagination()
    {
        $param = $this->getPaginationParams();
        $result = $this->userService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

    public function create(Request $request)
    {
        $result = $this->userService->create($request->all());

        return $this->getJsonResponse($result);
    }


    public function read($id)
    {
        $result = $this->userService->read($id);

        return $this->getJsonResponse($result);
    }

    public function update(Request $request)
    {
        $result = $this->userService->update(Input::all());

        return $this->getJsonResponse($result);
    }

    public function delete($id)
    {
        $result = $this->userService->delete($id);

        return $this->getJsonResponse($result);
    }

    public function setActive($email,$isActive){
        $result = $this->userService->setActiveUser($email,$isActive);

        return $this->getJsonResponse($result);
    }

    public function setBlock($email,$isBlock){
        $result = $this->userService->setBlockUser($email,$isBlock);

        return $this->getJsonResponse($result);
    }
}