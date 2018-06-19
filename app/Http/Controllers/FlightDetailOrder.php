<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Curl;

class FlightDetailOrder extends Controller
{

    public function flightDetailOrder($id, $flightId, $departId, $arrivalId, $paxAdult, $paxChildren, $paxInfant, $goDate, $roundTrip, $returnDate, $token){

        $response = Curl::to('http://api-sandbox.tiket.com/search/flight')
            ->withData(array(
                'd'         => $departId,
                'a'         => $arrivalId,
                'date'      => date('Y-m-d', strtotime($goDate)),
                // 'ret_date'  => date('Y-m-d', strtotime($returnDate)),
                'adult'     => $paxAdult,
                'child'     => $paxChildren,
                'infant'    => $paxInfant,
                'token'     => $token,
                'v'         => 3,
                'output'    =>'json'
            ))
            ->withOption('SSL_VERIFYPEER',0)
            ->withOption('SSL_VERIFYHOST',0)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->get();

        $searchQueries = [

            'departCountry'     =>  $response->content['go_det']['dep_airport']['country_name'],
            'departProvince'    =>  $response->content['go_det']['dep_airport']['province_name'],
            'departCity'        =>  $response->content['go_det']['dep_airport']['city_name'],
            'departAirport'     =>  $response->content['go_det']['dep_airport']['business_name']. ' ( '
                                    .$response->content['go_det']['dep_airport']['airport_code']. ' ) - '
                                    .$response->content['go_det']['dep_airport']['short_name'],
            'arrivalCountry'     =>  $response->content['go_det']['arr_airport']['country_name'],
            'arrivalProvince'    =>  $response->content['go_det']['arr_airport']['province_name'],
            'arrivalCity'        =>  $response->content['go_det']['arr_airport']['city_name'],
            'arrivalAirport'    =>  $response->content['go_det']['arr_airport']['business_name']. ' ( '
                                    .$response->content['go_det']['arr_airport']['airport_code']. ' ) - '
                                    .$response->content['go_det']['arr_airport']['short_name'],
            'departDate'        =>  $response->content['go_det']['formatted_date'],
            'token'             =>  $response->content['token']

        ];

        $searchData = [

            'flightId'          => $response->content['departures']['result'][$id]['flight_id'],
            'flightNumber'      => $response->content['departures']['result'][$id]['flight_number'],
            'terminal'          => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['terminal'],
            'stop'              => $response->content['departures']['result'][$id]['stop'],
            'maskapai'          => $response->content['departures']['result'][$id]['airlines_real_name'],
            'maskapai_logo'     => $response->content['departures']['result'][$id]['image'],
            'departDate'        => $response->content['departures']['result'][$id]['departure_flight_date_str'],
            'departTime'        => $response->content['departures']['result'][$id]['simple_departure_time'],
            'departId'          => $response->content['departures']['result'][$id]['departure_city'],
            'departName'        => $response->content['departures']['result'][$id]['departure_airport_name'],
            'departCity'        => $response->content['departures']['result'][$id]['departure_city_name'],
            'arrivalDate'       => $response->content['departures']['result'][$id]['arrival_flight_date_str'],
            'arrivalTime'       => $response->content['departures']['result'][$id]['simple_arrival_time'],
            'arrivalId'         => $response->content['departures']['result'][$id]['arrival_city'],
            'arrivalName'       => $response->content['departures']['result'][$id]['arrival_airport_name'],
            'arrivalCity'       => $response->content['departures']['result'][$id]['arrival_city_name'],
            'priceTotal'        => $response->content['departures']['result'][$id]['price_value'],
            'priceAdult'        => $response->content['departures']['result'][$id]['price_adult'],
            'priceChildren'     => $response->content['departures']['result'][$id]['price_child'],
            'priceInfant'       => $response->content['departures']['result'][$id]['price_infant'],
            'baggage'           => $response->content['departures']['result'][$id]['check_in_baggage']. ' '
                                .$response->content['departures']['result'][$id]['check_in_baggage_unit'],
            'duration_time'     => $response->content['departures']['result'][$id]['duration'],

        ];

        if($response->content['departures']['result'][$id]['stop']!='Langsung'){
            $flightInfos = [];
            for($i=0; $i<count($response->content['departures']['result'][$id]['flight_infos']['flight_info']); $i++){
                $flightInfos[] = [

                    'flightNumber'          => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['flight_number'],
                    'terminal'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['terminal'],
                    'maskapai'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['airlines_short_real_name_ucwords'],
                    'maskapai_logo'         => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['img_src'],
                    'departDate'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['string_departure_date'],
                    'departTime'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['simple_departure_time'],
                    'departId'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['departure_city'],
                    'departName'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['departure_airport_name'],
                    'departCity'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['departure_city_name'],
                    'arrivalDate'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['string_arrival_date'],
                    'arrivalTime'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['simple_arrival_time'],
                    'arrivalId'             => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['arrival_city'],
                    'arrivalName'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['arrival_airport_name'],
                    'arrivalCity'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['arrival_city_name'],
                    'durationHour'          => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['duration_hour'],
                    'durationMinute'        => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['duration_minute'],
                    'baggage'               => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['check_in_baggage'],
                    'baggageUnit'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['check_in_baggage_unit'],
                    'transitDurationHour'   => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['transit_duration_hour'],
                    'transitDurationMinute' => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['transit_duration_minute'],
                    'transitArrivalTextCity'=> $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['transit_arrival_text_city'],
                    'transitArrivalTextTime'=> $response->content['departures']['result'][$id]['flight_infos']['flight_info'][$i]['transit_arrival_text_time'],

                ];
            }
            $searchData['flightInfos'] = $flightInfos;
        }else{

            $searchData['flightInfos'] = [

                'flightNumber'          => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['flight_number'],
                'terminal'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['terminal'],
                'maskapai'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['airlines_short_real_name_ucwords'],
                'maskapai_logo'         => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['img_src'],
                'departDate'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['string_departure_date'],
                'departTime'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['simple_departure_time'],
                'departId'              => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['departure_city'],
                'departName'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['departure_airport_name'],
                'departCity'            => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['departure_city_name'],
                'arrivalDate'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['string_arrival_date'],
                'arrivalTime'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['simple_arrival_time'],
                'arrivalId'             => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['arrival_city'],
                'arrivalName'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['arrival_airport_name'],
                'arrivalCity'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['arrival_city_name'],
                'durationHour'          => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['duration_hour'],
                'durationMinute'        => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['duration_minute'],
                'baggage'               => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['check_in_baggage'],
                'baggageUnit'           => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['check_in_baggage_unit'],
                'transitDurationHour'   => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['transit_duration_hour'],
                'transitDurationMinute' => $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['transit_duration_minute'],
                'transitArrivalTextCity'=> $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['transit_arrival_text_city'],
                'transitArrivalTextTime'=> $response->content['departures']['result'][$id]['flight_infos']['flight_info'][0]['transit_arrival_text_time'],

            ];

        }

        $responseFlightOrder = Curl::to('http://api-sandbox.tiket.com/flight_api/get_flight_data')
            ->withData(array(
                'flight_id'     => $flightId,
                'date'          => date('Y-m-d', strtotime($goDate)),
                'token'         => $token,
                'output'        => 'json'
            ))
            ->withOption('SSL_VERIFYPEER',0)
            ->withOption('SSL_VERIFYHOST',0)
            ->asJsonResponse(true)
            ->returnResponseObject()
            ->get();

        $flightOrderData = [

            'data'      => 1,
            'pemesan'   => [
                'firstName' => [
                    'required'      => $responseFlightOrder->content['required']['conFirstName']['mandatory'],
                    'inputType'     => $responseFlightOrder->content['required']['conFirstName']['type'],
                ],
                'lastName'  => [
                    'required'      => $responseFlightOrder->content['required']['conLastName']['mandatory'],
                    'inputType'     => $responseFlightOrder->content['required']['conLastName']['type'],
                ],
                'phone'     => [
                    'required'      => $responseFlightOrder->content['required']['conPhone']['mandatory'],
                    'inputType'     => $responseFlightOrder->content['required']['conPhone']['type'],
                ],
                'email'     => [
                    'required'      => $responseFlightOrder->content['required']['conEmailAddress']['mandatory'],
                    'inputType'     => $responseFlightOrder->content['required']['conEmailAddress']['type'],
                ]
            ],
            'required' => $responseFlightOrder->content['required'],

        ];

        $title = [];
        for($i=0; $i<count($responseFlightOrder->content['required']['conSalutation']['resource']); $i++){
            $title[] = [
                'titleId'   => $responseFlightOrder->content['required']['conSalutation']['resource'][$i]['id'],
                'titleName' => $responseFlightOrder->content['required']['conSalutation']['resource'][$i]['name'],
            ];
        }

        $flightOrderData['pemesan']['title'] = $title;
        $flightOrderData['title'] = $title;

        // return $response->content;
        // return $flightOrderData;
        return response(['searchQueries' => $searchQueries, 'searchDataResult' => $searchData, 'flightOrderData' => $flightOrderData], 200);

    }

}
