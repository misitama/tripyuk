<?php

/*
	Use Name Space Here
*/
namespace App\Http\Controllers;

/*
	Call Model Here
*/
use App\Models\TripRoleModel;
use App\Models\TripUserModel;

/*
	Call Another Function  you want to use
*/
use App\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Validator;
use Crypt;
use URL;
use Image;
use Session;
use File;


class RoleController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /*
    	GET THE LIST OF THE RESOURCE
    */
	public function index(Request $request)
	{
	    return view('backoffice.role.index');
	}

	public function pagination(){
	    $param = $this->getPaginationParams();
        $result = $this->roleService->pagination($param);

        return $this->parsePaginationResultToGridJson($result);
    }

	public function create(Request $request)
	{
	    $result = $this->roleService->create($request->all());

        return $this->getJsonResponse($result);
	}

	/* 
		SHOW A RESOURCE
	*/
	public function read($id)
	{
		$result = $this->roleService->read($id);

        return $this->getJsonResponse($result);
	}

	public function showAll(){
	    $result = $this->roleService->showAll();

        return $this->getJsonResponse($result);
    }

	/* 
		EDIT A RESOURCE
	*/
	public function update(Request $request)
	{
		$result = $this->roleService->update($request->all());

        return $this->getJsonResponse($result);
	}


	/*
		DELETE A RESOURCE
	*/
	public function delete($id)
	{
		$result = $this->roleService->delete($id);

        return $this->getJsonResponse($result);
	}
}