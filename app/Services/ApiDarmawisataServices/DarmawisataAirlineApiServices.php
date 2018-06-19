<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 14/04/2018
 * Time: 15.02
 */

namespace App\Services\ApiDarmawisataServices;


use App\Services\Response\ServiceResponseDto;

class DarmawisataAirlineApiServices extends DarmawisataApiBaseService
{
    public function getAirLineList()
    {
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();
        $data = [];

        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {
            $params = array('userID' => self::userId, 'accessToken' => $getAccessToken->content['accessToken']);
            $result = $this->accessApiUrl('Airline/List', $params);

            if (count($result->content['airlines']) > 0) {
                for ($i = 0; $i < count($result->content['airlines']); $i++) {
                    $data[] = [
                        'value' => $result->content['airlines'][$i]['id'],
                        'label' => $result->content['airlines'][$i]['name']
                    ];
                }
            } else {
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }
            $response->setResult($data);
        }

        return $response;
    }

    public function getAirLineNationality()
    {
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();
        $data = [];
        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {
            $params = array('userID' => self::userId, 'accessToken' => $getAccessToken->content['accessToken']);
            $result = $this->accessApiUrl('Airline/Nationality', $params);

            if (count($result->content['countries']) > 0) {
                for ($i = 0; $i < count($result->content['countries']); $i++) {
                    $data[] = [
                        'airLineId' => $result->content['countries'][$i]['countryID'],
                        'airlineName' => $result->content['countries'][$i]['countryName']
                    ];
                }
            } else {
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }
            $response->setResult($data);
        }

        return $response;
    }

    public function getAirlineRoutes($airLineID)
    {
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();
        $data = [];

        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {
            $params = array('userID' => self::userId, 'accessToken' => $getAccessToken->content['accessToken'], 'airlineID' => $airLineID);
            $result = $this->accessApiUrl('Airline/Route', $params);

            if (count($result->content['routes']) > 0) {
                for ($i = 0; $i < count($result->content['routes']); $i++) {
                    $data[] = [
                        'origin' => $result->content['routes'][$i]['origin'],
                        'destination' => $result->content['routes'][$i]['destination'],
                        'originName' => $result->content['routes'][$i]['originName'],
                        'destinationName' => $result->content['routes'][$i]['destinationName']
                    ];
                }
            } else {
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }
            $response->setResult($data);
        }

        return $response;
    }

    public function getAirlineSchedule($input){
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();
        $schedule=[];
        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {

            if($input['tripType']=='RoundTrip'){
                $params = array(
                    'userID' => self::userId,
                    'accessToken' => $getAccessToken->content['accessToken'],
                    'airlineID' => $input['airlineId'],
                    'tripType'=>$input['tripType'],
                    'origin'=>$input['originId'],
                    'destination'=>$input['destinationId'],
                    'departDate'=>$input['departureDate'],
                    'returnDate'=>$input['returnDate'],
                    'paxAdult'=>$input['paxAdult'],
                    'paxChild'=>$input['paxChild'],
                    'paxInfant'=>$input['paxInfant'],
                    'promoCode'=>'',
                    'airlineAccessCode'=>''
                );
            }else{
                $params = array(
                    'userID' => self::userId,
                    'accessToken' => $getAccessToken->content['accessToken'],
                    'airlineID' => $input['airlineId'],
                    'tripType'=>$input['tripType'],
                    'origin'=>$input['originId'],
                    'destination'=>$input['destinationId'],
                    'departDate'=>$input['departureDate'],
                    'returnDate'=>'',
                    'paxAdult'=>$input['paxAdult'],
                    'paxChild'=>$input['paxChild'],
                    'paxInfant'=>$input['paxInfant'],
                    'promoCode'=>'',
                    'airlineAccessCode'=>''
                );
            }
            $result = $this->accessApiUrl('Airline/Schedule', $params);
            if($result->content['status']=='FAILED'){
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }else{

                $response->setResult($result->content);
            }
        }
        return $response;
    }

    public function getAddonBaggagesMeals($input){
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();

        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {

            if($input['tripType']=='RoundTrip'){
                $params = array(
                    'userID' => self::userId,
                    'accessToken' => $getAccessToken->content['accessToken'],
                    'airlineID' => $input['airlineId'],
                    'tripType'=>$input['tripType'],
                    'origin'=>$input['originId'],
                    'destination'=>$input['destinationId'],
                    'departDate'=>$input['departureDate'],
                    'returnDate'=>$input['returnDate'],
                    'paxAdult'=>$input['paxAdult'],
                    'paxChild'=>$input['paxChild'],
                    'paxInfant'=>$input['paxInfant'],
                    'schDepart'=>$input['schDepart'],
                    'schReturn'=>$input['schReturn'],
                );
            }else{
                $params = array(
                    'userID' => self::userId,
                    'accessToken' => $getAccessToken->content['accessToken'],
                    'airlineID' => $input['airlineId'],
                    'tripType'=>$input['tripType'],
                    'origin'=>$input['originId'],
                    'destination'=>$input['destinationId'],
                    'departDate'=>$input['departureDate'],
                    'returnDate'=>'',
                    'paxAdult'=>$input['paxAdult'],
                    'paxChild'=>$input['paxChild'],
                    'paxInfant'=>$input['paxInfant'],
                    'schDepart'=>$input['schDepart'],
                    'schReturn'=>'',
                );
            }
            $result = $this->accessApiUrl('Airline/BaggageAndMeal', $params);
            if($result->content['status']=='FAILED'){
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }else{
                $response->setResult($result->content);
            }
        }
        return $response;
    }

    public function getAddonSeats($input){
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();

        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {
            $params = array(
                'userID' => self::userId,
                'accessToken' => $getAccessToken->content['accessToken'],
                'airlineID' => $input['airlineId'],
                'tripType'=>$input['tripType'],
                'origin'=>$input['originId'],
                'destination'=>$input['destinationId'],
                'departDate'=>$input['departureDate'],
                'returnDate'=>'',
                'paxAdult'=>$input['paxAdult'],
                'paxChild'=>$input['paxChild'],
                'paxInfant'=>$input['paxInfant'],
                'schDepart'=>$input['schDepart'],
                'schReturn'=>'',
            );
            if($input['tripType']=='RoundTrip'){
                $params = array(
                    'userID' => self::userId,
                    'accessToken' => $getAccessToken->content['accessToken'],
                    'airlineID' => $input['airlineId'],
                    'tripType'=>$input['tripType'],
                    'origin'=>$input['originId'],
                    'destination'=>$input['destinationId'],
                    'departDate'=>$input['departureDate'],
                    'returnDate'=>$input['returnDate'],
                    'paxAdult'=>$input['paxAdult'],
                    'paxChild'=>$input['paxChild'],
                    'paxInfant'=>$input['paxInfant'],
                    'schDepart'=>$input['schDepart'],
                    'schReturn'=>$input['schReturn'],
                );
            }
            $result = $this->accessApiUrl('Airline/Seat', $params);
            if($result->content['status']=='FAILED'){
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }else{
                $response->setResult($result->content);
            }
        }
        return $response;
    }

    public function getAirLinePrices($input){
        $response = new ServiceResponseDto();
        $getAccessToken = $this->getAccessToken();

        if ($getAccessToken->content['status'] == 'FAILED') {
            $message = [$getAccessToken->content['respMessage']];
            $response->addErrorMessage($message);
        } else {
            $params = array(
                'userID' => self::userId,
                'accessToken' => $getAccessToken->content['accessToken'],
                'airlineID' => $input['airlineId'],
                'tripType'=>$input['tripType'],
                'origin'=>$input['originId'],
                'destination'=>$input['destinationId'],
                'departDate'=>$input['departureDate'],
                'returnDate'=>$input['returnDate'],
                'paxAdult'=>$input['paxAdult'],
                'paxChild'=>$input['paxChild'],
                'paxInfant'=>$input['paxInfant'],
                'promoCode'=>$input['promoCode'],
                'searchKey'=>$input['searchKey'],
                'schDepart'=>$input['schDepart'],
                'schReturn'=>$input['schReturn']
            );
            $result = $this->accessApiUrl('Airline/Price', $params);
            if($result->content['status']=='FAILED'){
                $message = [$result->content['respMessage']];
                $response->addErrorMessage($message);
            }else{
                $response->setResult($result->content);
            }
        }
        return $response;
    }
}