<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelReview;

use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Models\Hotel;

class HotelReviewController extends BaseController
{
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'hotel_id' => 'required|numeric',
            'title' => 'required|string',
            'description' => 'required|string',
            'rating' => 'required|numeric',
            'author' => 'required|string'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $hotel = HotelReview::create($input);

        return $this->sendResponse($hotel->toArray(), 'Hotel review submit successfully.');
    }

    public function show($id)
    {
        $hotel = Hotel::with('hotels_reviews')->find($id);

        if (is_null($hotel)) {
            return $this->sendError('Hotel not found.');
        }

        return $this->sendResponse($hotel->toArray(), 'Hotel retrieved successfully.');
    }

}
