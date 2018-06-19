<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 05/03/2018
 * Time: 18.01
 */

namespace App\Services;


use App\Events\NewUserActivation;
use App\Events\NewUserFromBackOffice;
use App\Events\NewUserRegister;
use App\Repositories\Contracts\IUserRepository;
use App\Services\Response\ServicePaginationResponseDto;
use App\Services\Response\ServiceResponseDto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserService extends BaseService
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    protected function validateEmail($input){
        $rules = [
            'email'=>'unique:trip_user,email'
        ];

        return Validator::make($input,$rules);
    }


    protected function generateRandomChar($length = 8) {
        $chars = "ABCDEFGHJKLMNPQRSTWXYZabcdefgijkmnopqrstwxyz123456789";
        $final_rand = '';

        for ($i = 0; $i < $length; $i++) {
            $final_rand .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $final_rand;
    }

    public function create($input){
        $response = new ServiceResponseDto();
        $source = 'frontoffice';

        $validateEmail = $this->isEmailExist($input['email']);
        if($validateEmail->getResult()){
            $message = ['Email already exist'];
            $response->addErrorMessage($message);
        }else{
            $activationKey = $this->generateRandomChar(20);
            if(!isset($input['password'])){
                $input['password'] = $this->generateRandomChar(6);
                $source = 'backoffice';
            }
            $param = [
                'roleId'=>$input['roleId'],
                'fullName'=>$input['fullName'],
                'email'=>$input['email'],
                'password'=>bcrypt($input['password']),
                'phone'=>$input['phone'],
                'mobilePhone'=>$input['mobilePhone'],
                'address'=>$input['address'],
                'sex'=>$input['sex'],
                'provinceId'=>$input['provinceId'],
                'regencyId'=>$input['regencyId'],
                'districtId'=>$input['districtId'],
                'activationKey'=>bcrypt($activationKey),
                'isActive'=>$input['isActive'],
                'isBlocked'=>$input['isBlocked']
            ];
            if(!$this->userRepository->create($param)){
                $message = ['Failed register new user'];
                $response->addErrorMessage($message);
            }
//            else{
//                if($source == 'frontoffice'){
//                    Event::fire(new NewUserRegister($input['email'],$activationKey));
//                }else{
//                    Event::fire(new NewUserFromBackOffice($input['email'],$input['fullName'],$input['password'],$activationKey,$input['roleName']));
//                }
//            }
        }

        return $response;
    }

    public function read($id){
        return $this->readObject($this->userRepository,$id);
    }

    public function showAll(){
        return $this->getAllObject($this->userRepository);
    }

    public function update($input){
        $response = new ServiceResponseDto();

        $isEmailExist = $this->isEmailExist($input['email'],$input['userId']);
        if($isEmailExist->getResult()){
            $message = ['Email already exist'];
            $response->addErrorMessage($message);
        }else{
            if(!$this->userRepository->update($input)){
                $message = ['Failed update user data'];
                $response->addErrorMessage($message);
            }
        }

        return $response;
    }

    public function delete($id){
        return $this->deleteObject($this->userRepository,$id);
    }

    public function pagination($param){
        return $this->getPaginationObject($this->userRepository,$param);
    }

    public function paginationByUserLevel($param,$userLevel){
        $response = new ServicePaginationResponseDto();

        $pagingResult = $this->userRepository->paginationByUserLevel($this->parsePaginationParam($param), $userLevel);
        $response->setCurrentPage($param['pageIndex']);
        $response->setPageSize($param['pageSize']);
        $response->setTotalCount($pagingResult->getTotalCount());
        $response->setResult($pagingResult->getResult());

        return $response;
    }

    protected function checkActivationKey($email,$activationKey){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->checkActivationCode($email,$activationKey));

        return $response;
    }

    protected function flushActivationKey($email){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->flushactivationKey($email));

        return $response;
    }

    public function activationUser($email,$activationKey){
        $response = new ServiceResponseDto();

        $checkActivationKey = $this->checkActivationKey($email,$activationKey);
        if($checkActivationKey->getResult()){
            $isActive = 1;
            $activatingUser = $this->setActiveUser($email,$isActive);
            if($activatingUser->isSuccess()){
                $userData = $this->read($email)->getResult();
                $this->flushActivationKey($email);
                Event::fire(new NewUserActivation($email,$userData->full_name));
            }else{
                $response->addErrorMessage($activatingUser->getResult());
            }
        }else{
            $message= ['Activation key not valid'];
            $response->addErrorMessage($message);
        }
//        $response->setResult($this->userRepository->setActiveUser($email,1));
        return $response;
    }

    public function setActiveUser($email,$isActive){
        $response = new ServiceResponseDto();

        if(!$this->userRepository->setActiveUser($email,$isActive)){
            $message= ['Failed activating new user'];
            $response->addErrorMessage($message);
        }

        return $response;
    }

    public function setBlockUser($email,$isBlocked){
        $response = new ServiceResponseDto();

        if(!$this->userRepository->setBlockUser($email,$isBlocked)){
            if($isBlocked==1){
                $message= ['Failed set block user'];
            }else{
                $message = ['Failed set unblock user'];
            }
            $response->addErrorMessage($message);
        }

        return $response;
    }

    protected function checkHashedPassword($email,$password){
        $response= new ServiceResponseDto();

        $response->setResult($this->userRepository->checkUserPassword($email,$password));

        return $response;
    }

    public function changePassword($email,$password){
        $response = new ServiceResponseDto();

        $isPasswordValid = $this->checkHashedPassword($email,$password);
        if($isPasswordValid->getResult()){
            if(!$this->userRepository->changePassword($email,$password)){
                $message =['Failed change password'];
                $response->addErrorMessage($message);
            }
        }else{
            $message = ['Old password not valid'];
            $response->addErrorMessage($message);
        }

        return $response;
    }

    protected function isBlocked($email){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->checkUserBlocked($email));

        return $response;
    }

    public function isActive($email){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->checkUserActive($email));

        return $response;
    }

    protected function isEmailExist($email,$id = null){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->checkExistEmail($email,$id));

        return $response;
    }

    public function setLogLastVisited($email){
        $response = new ServiceResponseDto();

        $response->setResult($this->userRepository->lastVisitedLog($email));

        return $response;
    }

    public function checkLogin($email,$password,$remember){
        $response = new ServiceResponseDto();

        $isExist = $this->isEmailExist($email);
        if($isExist->getResult()){
            $isActive = $this->isActive($email);
            if($isActive->getResult()){
                $isBlocked = $this->isBlocked($email);
                if($isBlocked->getResult()){
                    $message = ['Cannot login, your user has been blocked'];
                    $response->addErrorMessage($message);
                }else{
                    if (!$token = JWTAuth::attempt(['email'=>$email,'password'=>$password])) {
                        $message =['Invalid credentials'];
                        $response->addErrorMessage($message);
                    }

                    $response->setResult($token);
                }
            }else{
                $message = ['Cannot login, your user not active yet'];
                $response->addErrorMessage($message);
            }
        }else{
            $message = ['Cannot login, cannot find email you entered'];
            $response->addErrorMessage($message);
        }
        return $response;
    }
}