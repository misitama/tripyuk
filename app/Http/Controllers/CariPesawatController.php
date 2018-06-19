<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Curl;

class CariPesawatController extends Controller
{
    //
    public function searchFlight($departId, $arrivalId, $paxAdult, $paxChildren, $paxInfant, $goDate, $roundTrip, $returnDate) {

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

        $response = Curl::to('http://api-sandbox.tiket.com/search/flight')
            ->withData(array(
                'd'         => $departId,
                'a'         => $arrivalId,
                'date'      => date('Y-m-d', strtotime($goDate)),
                // 'ret_date'  => date('Y-m-d', strtotime($returnDate)),
                'adult'     => $paxAdult,
                'child'     => $paxChildren,
                'infant'    => $paxInfant,
                'token'     => $token->content['token'],
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

        $nearbyGoDate = [];
        if(isset($response->content['nearby_go_date']['nearby'])){

            for($i=0;$i<count($response->content['nearby_go_date']['nearby']);$i++){
                $nearbyGoDate[] = [

                    'date' => $response->content['nearby_go_date']['nearby'][$i]['date'],
                    'price' => $response->content['nearby_go_date']['nearby'][$i]['price'],

                ];
            }

        }

        $searchData = [];

        if(isset($response->content['departures']['result'])){
            for($i=0; $i<count($response->content['departures']['result']);$i++){
                $searchData[] = [

                    'flightId'          => $response->content['departures']['result'][$i]['flight_id'],
                    'flightNumber'      => $response->content['departures']['result'][$i]['flight_number'],
                    'terminal'          => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['terminal'],
                    'stop'              => $response->content['departures']['result'][$i]['stop'],
                    'maskapai'          => $response->content['departures']['result'][$i]['airlines_real_name'],
                    'maskapai_logo'     => $response->content['departures']['result'][$i]['image'],
                    'departDate'        => $response->content['departures']['result'][$i]['departure_flight_date_str'],
                    'departTime'        => $response->content['departures']['result'][$i]['simple_departure_time'],
                    'departId'          => $response->content['departures']['result'][$i]['departure_city'],
                    'departName'        => $response->content['departures']['result'][$i]['departure_airport_name'],
                    'departCity'        => $response->content['departures']['result'][$i]['departure_city_name'],
                    'arrivalDate'        => $response->content['departures']['result'][$i]['arrival_flight_date_str'],
                    'arrivalTime'       => $response->content['departures']['result'][$i]['simple_arrival_time'],
                    'arrivalId'         => $response->content['departures']['result'][$i]['arrival_city'],
                    'arrivalName'       => $response->content['departures']['result'][$i]['arrival_airport_name'],
                    'arrivalCity'       => $response->content['departures']['result'][$i]['arrival_city_name'],
                    'price'             => [
                        'priceTotal'    => $response->content['departures']['result'][$i]['price_value'],
                        'priceAdult'    => $response->content['departures']['result'][$i]['price_adult'],
                        'priceChildren' => $response->content['departures']['result'][$i]['price_child'],
                        'priceInfant'   => $response->content['departures']['result'][$i]['price_infant'],
                    ],
                    'baggage'           => $response->content['departures']['result'][$i]['check_in_baggage']. ' '
                                        .$response->content['departures']['result'][$i]['check_in_baggage_unit'],
                    'duration_time'     => $response->content['departures']['result'][$i]['duration'],

                ];

                if($response->content['departures']['result'][$i]['stop']!='Langsung'){
                    $flightInfos = [];
                    for($j=0;$j<count($response->content['departures']['result'][$i]['flight_infos']['flight_info']);$j++){
                        $flightInfos[] = [

                            'flightNumber'          => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['flight_number'],
                            'terminal'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['terminal'],
                            'maskapai'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['airlines_short_real_name_ucwords'],
                            'maskapai_logo'         => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['img_src'],
                            'departDate'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['string_departure_date'],
                            'departTime'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['simple_departure_time'],
                            'departId'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['departure_city'],
                            'departName'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['departure_airport_name'],
                            'departCity'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['departure_city_name'],
                            'arrivalDate'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['string_arrival_date'],
                            'arrivalTime'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['simple_arrival_time'],
                            'arrivalId'             => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['arrival_city'],
                            'arrivalName'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['arrival_airport_name'],
                            'arrivalCity'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['arrival_city_name'],
                            'durationHour'          => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['duration_hour'],
                            'durationMinute'        => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['duration_minute'],
                            'baggage'               => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['check_in_baggage'],
                            'baggageUnit'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['check_in_baggage_unit'],
                            'transitDurationHour'   => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['transit_duration_hour'],
                            'transitDurationMinute' => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['transit_duration_minute'],
                            'transitArrivalTextCity'=> $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['transit_arrival_text_city'],
                            'transitArrivalTextTime'=> $response->content['departures']['result'][$i]['flight_infos']['flight_info'][$j]['transit_arrival_text_time'],

                        ];
                    }
                    $searchData[$i]['flightInfos']=$flightInfos;
                }else{
                    $searchData[$i]['flightInfos']=[

                        'flightNumber'          => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['flight_number'],
                        'terminal'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['terminal'],
                        'maskapai'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['airlines_short_real_name_ucwords'],
                        'maskapai_logo'         => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['img_src'],
                        'departDate'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['string_departure_date'],
                        'departTime'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['simple_departure_time'],
                        'departId'              => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['departure_city'],
                        'departName'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['departure_airport_name'],
                        'departCity'            => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['departure_city_name'],
                        'arrivalDate'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['string_arrival_date'],
                        'arrivalTime'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['simple_arrival_time'],
                        'arrivalId'             => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['arrival_city'],
                        'arrivalName'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['arrival_airport_name'],
                        'arrivalCity'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['arrival_city_name'],
                        'durationHour'          => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['duration_hour'],
                        'durationMinute'        => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['duration_minute'],
                        'baggage'               => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['check_in_baggage'],
                        'baggageUnit'           => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['check_in_baggage_unit'],
                        'transitDurationHour'   => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['transit_duration_hour'],
                        'transitDurationMinute' => $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['transit_duration_minute'],
                        'transitArrivalTextCity'=> $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['transit_arrival_text_city'],
                        'transitArrivalTextTime'=> $response->content['departures']['result'][$i]['flight_infos']['flight_info'][0]['transit_arrival_text_time'],

                    ];
                }

            }
        }

        // return $response->content;
        // return $nearbyGoDate;
        return response(['searchQueries' => $searchQueries, 'searchDataResult' => $searchData, 'nearbyGoDate' => $nearbyGoDate], 200);
    }

}
