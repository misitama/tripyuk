<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Curl;

class PesawatController extends Controller
{
    //
    public function getAllAirPort(){

        // Get Token
        $token = Curl::to('https://api-sandbox.tiket.com/apiv1/payexpress')
            ->withData(array(
                'method'    =>'getToken',
                'secretkey' =>'6713cd86a2bc00912c1fe8e59be74c9a',
                'output'    =>'json'
            ))
            ->withOption('SSL_VERIFYPEER',0)
            ->withOption('SSL_VERIFYHOST',0)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->get();

        // Get All AirPort
        $response = Curl::to('https://api-sandbox.tiket.com/flight_api/all_airport')
            ->withData(array(
                'token'     => $token->content['token'],
                'output'    =>'json',
            ))
            ->withOption('SSL_VERIFYPEER',0)
            ->withOption('SSL_VERIFYHOST',0)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->get();

        $airport = [];
        for($i=0;$i<count($response->content['all_airport']['airport']);$i++){
            $airport[]=[
                'value' => $response->content['all_airport']['airport'][$i]['airport_code'],
                'label' => $response->content['all_airport']['airport'][$i]['airport_name']. ',' .$response->content['all_airport']['airport'][$i]['location_name']. ',('.$response->content['all_airport']['airport'][$i]['airport_code'].')',
            ];
        }

        // return $response->content;
        return response(['airport'=>$airport],200);

    }


}
