<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Curl;

class OrderPesawatController extends Controller
{

    public function addOrder(Request $request, $id, $flightId, $departId, $arrivalId, $paxAdult, $paxChildren, $paxInfant, $goDate, $roundTrip, $returnDate, $token){
        $requestData = $request->get('paxAdultData');
        $index = 1;

        $flightOrderData = [
            'token' => $token,
            'flight_id' => $flightId,
            'child' => $paxChildren,
            'adult' => $paxAdult,
            'infant' => $paxInfant,
            'output' => 'json',
        ];

        $pemesanData = [
            'conSalutation' => $request->get('titlePemesan'),
            'conFirstName' => $request->get('firstNamePemesan'),
            'conLastName' => $request->get('lastNamePemesan'),
            'conPhone' => $request->get('phoneNumberPemesan'),
            'conEmailAddress' => $request->get('emailPemesan'),
        ];

        // paxAdult
        $paxAdultData = [];
        for($i=0;$i<count($request->get('paxAdultData'));$i++){
            $paxAdultData = [
                'firstnamea'.$index => $requestData[$i]['firstName'],
                'lastnamea'.$index => $requestData[$i]['lastName'],
                'birthdatea'.$index => $requestData[$i]['birthDate'],
                'ida'.$index => $requestData[$i]['id'],
                'titlea'.$index => $requestData[$i]['title'],
            ];
            $index++;
        }

        $requestArrayData = array_merge($flightOrderData, $pemesanData, $paxAdultData);

        $response = Curl::to('https://api-sandbox.tiket.com/order/add/flight')
        ->withData($requestArrayData)
        ->withOption('SSL_VERIFYPEER',0)
        ->withOption('SSL_VERIFYHOST',0)
        ->asJsonResponse(true)
        ->returnResponseObject()
        ->get();

        $responseData = [
            'statusOrderData' => $response->content['diagnostic']['confirm'],
            'statusResponse' => $response->content['diagnostic']['status'],
            'token' => $response->content['token'],
        ];

        // return $requestDatas[0]['firstName'];
        // return $requestArrayData;
        return response(['resultData' => $responseData]);
    }

    public function orderPesawat($token){
        $response = Curl::to('https://api-sandbox.tiket.com/order')
            ->withData(array(
                'token' => $token,
                'output' => 'json',
            ))
        ->withOption('SSL_VERIFYPEER',0)
        ->withOption('SSL_VERIFYHOST',0)
        ->asJsonResponse(true)
        ->returnResponseObject()
        ->get();

        $orderData = [
            'orderId' => $response->content['myorder']['order_id'],
            'total' => $response->content['myorder']['total'],
            'totalTax' => $response->content['myorder']['total_tax'],
            'totalNoTax' => $response->content['myorder']['total_without_tax'],
            'checkoutLink' => $response->content['checkout'],
            'token' => $token
        ];

        $myOrder = [];
        if(isset($response->content['myorder']['data'])){
            for($i=0; $i<count($response->content['myorder']['data']); $i++){
                $myOrder[] = [
                    'orderDetailId' => $response->content['myorder']['data'][$i]['order_detail_id'],
                    'expire' => $response->content['myorder']['data'][$i]['expire'],
                    'expireDateTime' => $response->content['myorder']['data'][$i]['order_expire_datetime'],
                    'orderType' => $response->content['myorder']['data'][$i]['order_type'],
                    'customerPrice' => $response->content['myorder']['data'][$i]['customer_price'],
                    'taxAndCharge' => $response->content['myorder']['data'][$i]['tax_and_charge'],
                    'totalPriceAndCharge' => $response->content['myorder']['data'][$i]['subtotal_and_charge'],
                    'deleteOrderURL' => $response->content['myorder']['data'][$i]['delete_uri'],
                    'businesId' => $response->content['myorder']['data'][$i]['business_id'],
                    'maskapai_logo' => $response->content['myorder']['data'][$i]['order_photo'],
                    'detailOrder' => [
                        'orderDetailId' => $response->content['myorder']['data'][$i]['detail']['order_detail_id'],
                        'maskapai' => $response->content['myorder']['data'][$i]['detail']['airlines_name'],
                        'flightNumber' => $response->content['myorder']['data'][$i]['detail']['flight_number'],
                        'departId' => $response->content['myorder']['data'][$i]['detail']['departure_city'],
                        'departName' => $response->content['myorder']['data'][$i]['detail']['departure_airport_name'],
                        'departCity' => $response->content['myorder']['data'][$i]['detail']['departure_city_name'],
                        'departDate' => $response->content['myorder']['data'][$i]['detail']['flight_date'],
                        'departTime' => $response->content['myorder']['data'][$i]['detail']['departure_time'],
                        'arrivalId' => $response->content['myorder']['data'][$i]['detail']['arrival_city'],
                        'arrivalName' => $response->content['myorder']['data'][$i]['detail']['arrival_airport_name'],
                        'arrivalCity' => $response->content['myorder']['data'][$i]['detail']['arrival_city_name'],
                        'arrivalTime' => $response->content['myorder']['data'][$i]['detail']['arrival_time'],
                        'priceAdult' => $response->content['myorder']['data'][$i]['detail']['price_adult'],
                        'priceChildren' => $response->content['myorder']['data'][$i]['detail']['price_child'],
                        'priceInfant' => $response->content['myorder']['data'][$i]['detail']['price_infant'],
                        'baggageFee' => $response->content['myorder']['data'][$i]['detail']['baggage_fee'],
                        'totalPrice' => $response->content['myorder']['data'][$i]['detail']['price'],
                        'class' => $response->content['myorder']['data'][$i]['detail']['class'],
                    ],
                ];

                if($response->content['myorder']['data'][$i]['detail']['price_adult'] != 0){
                    $paxAdult = [];
                    for($j=0; $j<count($response->content['myorder']['data'][$i]['detail']['passengers']['adult']); $j++){
                        $paxAdult[] = [
                            'orderPaxId' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['order_passenger_id'],
                            'orderDetailId' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['order_detail_id'],
                            'type' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['type'],
                            'firstName' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['first_name'],
                            'lastName' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['last_name'],
                            'title' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['title'],
                            'idNumber' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['id_number'],
                            'birthDate' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['birth_date'],
                            'adultIndex' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['adult_index'],
                            'passportId' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['passport_no'],
                            'passportExpiry' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['passport_expiry'],
                            'passportIssuingCountry' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['passport_issuing_country'],
                            'passportNationality' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['passport_nationality'],
                            'passportIssuedDate' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['passport_issued_date'],
                            'checkInBaggage' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['check_in_baggage'],
                            'checkInBaggageSize' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['check_in_baggage_size'],
                            'checkInBaggageReturn' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['check_in_baggage_return'],
                            'checkInBaggageSizeReturn' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['check_in_baggage_size_return'],
                            'birthCountry' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['birth_country'],
                            'ticketNumber' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['ticket_number'],
                            'baggageUnit' => $response->content['myorder']['data'][$i]['detail']['passengers']['adult'][$j]['check_in_baggage_unit'],
                        ];
                    }
                    $myOrder[$i]['detailOrder']['pax']['paxAdult'] = $paxAdult;
                }
            }
            $orderData['myOrder'] = $myOrder;
        }

        // return $response->content;
        return response(['orderData' => $orderData]);
    }

    public function deleteOrderData($orderDetailId, $token){
        $response = Curl::to('https://api-sandbox.tiket.com/order/delete_order')
        ->withData(array(
            'order_detail_id'   => $orderDetailId,
            'token'             => $token,
            'output'            => 'json',
        ))
        ->withOption('SSL_VERIFYPEER',0)
        ->withOption('SSL_VERIFYHOST',0)
        ->asJsonResponse(true)
        ->returnResponseObject()
        ->get();

        $resultData = [
            'message' => $response->content['updateStatus'],
            'token' => $token,
        ];

        // return $response->content;
        return response(['dataResult' => $resultData]);
    }

}
