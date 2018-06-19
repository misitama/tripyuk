<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapBox\Formatter\Formatter;

use Curl;

class KapalController extends Controller
{

    const baseUrl = 'https://180.250.182.122/h2h/';
    const userId = 'U4P0ZVVI24';
    const pass = 'U4P2121454';

    protected function getToken()
    {
        return date('Y-m-d') . 'T' . date('H:i:s');
    }

    protected function getSecurityCode($token)
    {
        return md5($token . md5(self::pass));
    }

    public function loginApi() {

        $userID = self::userId;
        $token = $this->getToken();
        $securityCode = $this->getSecurityCode($token);

        // $response = Curl::to('http://180.250.182.122/h2h/Session/Login')
        // ->withData(array(
        //     'userID' => $userID,
        //     'securityCode' => $securityCode,
        //     'token' => $token,
        // ))
        // ->withOption('SSL_VERIFYPEER',0)
        // ->withOption('SSL_VERIFYHOST',0)
        // ->asJsonRequest()
        // ->asJsonResponse(true)
        // ->returnResponseObject()
        // ->post();

        $response = Curl::to('search.fitruums.com/1/PostGet/NonStaticXMLAPI.asmx/GetLanguages')
        ->withData(array(
            'userName' => 'TRIPYUKTEST',
            'password' => 'Test123456',
        ))
        ->withOption('SSL_VERIFYPEER',0)
        ->withOption('SSL_VERIFYHOST',0)
        // ->withContentType('application/json')
        // ->asJsonResponse(true)
        ->returnResponseObject()
        ->get();

        // $xmlString = new SimpleXMLElement($response->content);
        // $json = Formatter::make($xml, Formatter::XML)->toJson();

        return $response->content;
        // return $xmlString->__toString();
        // return file_get_contents($response->content);
        // return json_decode($json);
    }

}
