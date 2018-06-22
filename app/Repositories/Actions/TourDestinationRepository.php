<?php
/**
 * Created by PhpStorm.
 * User: syaikhul
 * Date: 20/06/2018
 * Time: 22.00
 */

namespace App\Repositories\Actions;


use App\Models\TripTourDestinationModel;
use App\Repositories\Contracts\ITourDestinationRepository;
use App\Repositories\Contracts\Pagination\PaginationParam;
use App\Repositories\Contracts\Pagination\PaginationResult;

class TourDestinationRepository implements ITourDestinationRepository
{

    public function create($input)
    {
        $tourDestination = new TripTourDestinationModel();
        $tourDestination->destination_name = $input['destinationName'];
        $tourDestination->region = $input['region'];
        $tourDestination->country = $input['country'];
        $tourDestination->city = $input['city'];
        $tourDestination->description = $input['description'];
        $tourDestination->created_at = date('Y-m-d H:i:s');

        return $tourDestination->save();
    }

    public function update($input)
    {
        $tourDestination = TripTourDestinationModel::find($input['id']);
        $tourDestination->destination_name = $input['destinationName'];
        $tourDestination->region = $input['region'];
        $tourDestination->country = $input['country'];
        $tourDestination->city = $input['city'];
        $tourDestination->description = $input['description'];
        $tourDestination->update_at = date('Y-m-d H:i:s');

        return $tourDestination->save();
    }

    public function delete($id)
    {
        return TripTourDestinationModel::find($id)->delete();
    }

    public function read($id)
    {
        $tourDestination = TripTourDestinationModel::find($id);

        return [
            'tourDestinationId' => $tourDestination->id,
            'destinationName' => $tourDestination->destination_name,
            'region' => $tourDestination->region,
            'country' => $tourDestination->country,
            'city' => $tourDestination->city,
            'description' => $tourDestination->description,
            'createdAt' => $tourDestination->created_at->toDateString(),
            'updatedAt' => $tourDestination->updated_at->toDateString()
        ];
    }

    public function showAll()
    {
        $tourDestinations = TripTourDestinationModel::all();
        $data = [];

        foreach ($tourDestinations as $tourDestination) {
            $data[] = [
                'tourDestinationId' => $tourDestination->id,
                'destinationName' => $tourDestination->destination_name,
                'region' => $tourDestination->region,
                'country' => $tourDestination->country,
                'city' => $tourDestination->city,
                'description' => $tourDestination->description,
                'createdAt' => $tourDestination->created_at->toDateString(),
                'updatedAt' => $tourDestination->updated_at->toDateString()
            ];
        }

        return $data;
    }

    public function paginationData(PaginationParam $param)
    {

    }

    public function paginationByFilter(PaginationParam $param, $region = null, $country = null, $city)
    {
        $result = new PaginationResult();


        $sortBy = ($param->getSortBy() == '' ? 'id' : $param->getSortBy());

        $sortOrder = ($param->getSortOrder() == '' ? 'asc' : $param->getSortOrder());


        //setup skip data for paging

        if ($param->getPageSize() == -1) {
            $skipCount = 0;
        } else {
            $skipCount = ($param->getPageIndex() * $param->getPageSize());
        }

        //get total count data
        if ($region == null) {
            $result->setTotalCount(TripTourDestinationModel::count());
        } else {
            if ($country == null) {
                $result->setTotalCount(TripTourDestinationModel::where('region', '=', $region)->count());
            } else {
                if ($city == null) {
                    $result->setTotalCount(TripTourDestinationModel::where('region', '=', $region)->where('country', '=', $region)->count());
                } else {
                    $result->setTotalCount(TripTourDestinationModel::where('region', '=', $region)->where('country', '=', $region)->where('city', '=', $city)->count());
                }
            }
        }


        //get data

        if ($param->getKeyword() == '') {


            if ($skipCount == 0) {
                if ($region == null) {
                    $data = TripTourDestinationModel::take($param->getPageSize())
                        ->orderBy($sortBy, $sortOrder)
                        ->get();
                } else {
                    if ($country == null) {
                        $data = TripTourDestinationModel::where('region', '=', $region)
                            ->take($param->getPageSize())
                            ->orderBy($sortBy, $sortOrder)
                            ->get();
                    } else {
                        if ($city == null) {
                            $data = TripTourDestinationModel::where('region', '=', $region)
                                ->where('country', '=', $country)
                                ->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        } else {
                            $data = TripTourDestinationModel::where('region', '=', $region)
                                ->where('country', '=', $country)
                                ->where('city', '=', $city)
                                ->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        }
                    }
                }

            } else {

                if ($region == null) {
                    $data = TripTourDestinationModel::skip($skipCount)->take($param->getPageSize())
                        ->orderBy($sortBy, $sortOrder)
                        ->get();
                } else {
                    if ($country == null) {
                        $data = TripTourDestinationModel::where('region', '=', $region)
                            ->skip($skipCount)->take($param->getPageSize())
                            ->orderBy($sortBy, $sortOrder)
                            ->get();
                    } else {
                        if ($city == null) {
                            $data = TripTourDestinationModel::where('region', '=', $region)
                                ->where('country', '=', $country)
                                ->skip($skipCount)->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        } else {
                            $data = TripTourDestinationModel::where('region', '=', $region)
                                ->where('country', '=', $country)
                                ->where('city', '=', $city)
                                ->skip($skipCount)->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        }
                    }
                }

            }

        } else {

            if ($skipCount == 0) {

                if ($region == null) {
                    $data = TripTourDestinationModel::where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('region', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('country', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('city', 'like', '%' . $param->getKeyword() . '%')
                        ->take($param->getPageSize())
                        ->orderBy($sortBy, $sortOrder)
                        ->get();
                } else {
                    if ($country == null) {
                        $data = TripTourDestinationModel::where(function ($q) use ($region) {
                            $q->where('region', '=', $region);
                        })->where(function ($q) use ($param) {
                            $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                                ->orWhere('country', 'like', '%' . $param->getKeyword() . '%')
                                ->orWhere('city', 'like', '%' . $param->getKeyword() . '%');
                        })->take($param->getPageSize())
                            ->orderBy($sortBy, $sortOrder)
                            ->get();
                    } else {
                        if ($city == null) {
                            $data = TripTourDestinationModel::where(function ($q) use ($region, $country) {
                                $q->where('region', '=', $region)
                                    ->where('country', '=', $country);
                            })->where(function ($q) use ($param) {
                                $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                                    ->orWhere('city', 'like', '%' . $param->getKeyword() . '%');
                            })->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        } else {
                            $data = TripTourDestinationModel::where(function ($q) use ($region, $country, $city) {
                                $q->where('region', '=', $region)
                                    ->where('country', '=', $country)
                                    ->where('city', '=', $city);
                            })->where(function ($q) use ($param) {
                                $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%');
                            })->take($param->getPageSize())
                                ->orderBy($sortBy, $sortOrder)
                                ->get();
                        }
                    }
                }

            } else {

                if ($region == null) {
                    $data = TripTourDestinationModel::where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('region', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('country', 'like', '%' . $param->getKeyword() . '%')
                        ->orWhere('city', 'like', '%' . $param->getKeyword() . '%')
                        ->orderBy($sortBy, $sortOrder)
                        ->skip($skipCount)->take($param->getPageSize())
                        ->get();
                } else {
                    if ($country == null) {
                        $data = TripTourDestinationModel::where(function ($q) use ($region) {
                            $q->where('region', '=', $region);
                        })->where(function ($q) use ($param) {
                            $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                                ->orWhere('country', 'like', '%' . $param->getKeyword() . '%')
                                ->orWhere('city', 'like', '%' . $param->getKeyword() . '%');
                        })
                            ->orderBy($sortBy, $sortOrder)
                            ->skip($skipCount)->take($param->getPageSize())
                            ->get();
                    } else {
                        if ($city == null) {
                            $data = TripTourDestinationModel::where(function ($q) use ($region, $country) {
                                $q->where('region', '=', $region)
                                    ->where('country', '=', $country);
                            })->where(function ($q) use ($param) {
                                $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%')
                                    ->orWhere('city', 'like', '%' . $param->getKeyword() . '%');
                            })
                                ->orderBy($sortBy, $sortOrder)
                                ->skip($skipCount)->take($param->getPageSize())
                                ->get();
                        } else {
                            $data = TripTourDestinationModel::where(function ($q) use ($region, $country, $city) {
                                $q->where('region', '=', $region)
                                    ->where('country', '=', $country)
                                    ->where('city', '=', $city);
                            })->where(function ($q) use ($param) {
                                $q->where('destination_name', 'like', '%' . $param->getKeyword() . '%');
                            })
                                ->orderBy($sortBy, $sortOrder)
                                ->skip($skipCount)->take($param->getPageSize())
                                ->get();
                        }
                    }
                }

            }

        }


        $result->setCurrentPageIndex($param->getPageIndex());
        $result->setCurrentPageSize($param->getPageSize());
        $result->setResult($data);


        return $result;
    }


    public function isDestinationExist($destinationName, $country, $city, $id = null)
    {
        if ($id == null) {
            $result = TripTourDestinationModel::where('country', '=', $country)->where('city', '=', $city)->where('destination_name', '=', $destinationName)->count();
        } else {
            $result = TripTourDestinationModel::where(function ($q) use ($destinationName, $country, $city) {
                $q->where('country', '=', $country)->where('city', '=', $city)->where('destination_name', '=', $destinationName);
            })->where('id', '<>', $id)->count();
        }

        return ($result > 0);
    }
}