<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 14/04/2018
 * Time: 14.10
 */

namespace App\Services\ApiDarmawisataServices;


use App\Services\BaseService;
use App\Services\Response\ServiceResponseDto;
use Ixudra\Curl\Facades\Curl;


class DarmawisataApiBaseService extends BaseService
{
    const baseUrl = 'https://180.250.182.122/h2h/';
    const  userId = 'U4P0ZVVI24';
    const pass = 'U4P2121454';

    protected function getToken()
    {
        return date('Y-m-d') . 'T' . date('H:i:s');
    }

    protected function getSecurityCode($token)
    {
        return md5($token . md5(self::pass));
    }

    protected function accessApiUrl($destinationUrl, $parameters)
    {
        return Curl::to(self::baseUrl . $destinationUrl)
            ->withData($parameters)
            ->withOption('SSL_VERIFYPEER', false)
            ->withOption('SSL_VERIFYHOST', false)
            ->withHeader('Access-Control-Allow-Origin: *')
            ->asJson(true)
            ->returnResponseObject()
            ->post();
    }

    protected function getAccessToken()
    {
        $response = new ServiceResponseDto();
        $securityCode = $this->getSecurityCode($this->getToken());
        $params = array('token' => $this->getToken(), 'securityCode' => $securityCode, 'userID' => self::userId, 'accessToken' => '');

        $result = $this->accessApiUrl('Session/Login', $params);

        return $result;
    }


}