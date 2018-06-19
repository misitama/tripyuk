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
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }



    public function login()
    {
		$result = $this->userService->checkLogin(Input::get('email'),Input::get('password'),Input::get('remember'));

        if($result->isSuccess()){
            return response([
                'status' => 'success'
            ])->header('Authorization', $result->getResult());
        }else{
            return response([
                'status'=>'error',
                'message'=>$result->getErrorMessages()
            ],400);
        }

    }

    public function logout(Request $request)
    {
        JWTAuth::invalidate();
        return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    public function user(Request $request)
    {
        $user = TripUserModel::find(Auth::user()->id);
        return response([
            'status' => 'success',
            'data' => $user
        ]);
    }

    public function refresh()
    {
        return response([
            'status' => 'success'
        ]);
    }

    public function confirmation($email,$activationKey){
        return view('backoffice.auth.confirmation')->with('email',$email)->with('activationKey',$activationKey);
    }

    public function postConfirm(){
        $result = $this->userService->activationUser(Input::get('email'),Input::get('activationKey'));

        return $this->getJsonResponse($result);
    }
}