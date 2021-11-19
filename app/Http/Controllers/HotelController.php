<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Hotel;

class HotelController extends BaseController
{
    public function index()
    {
        $hotels = Hotel::all();
        return $this->sendResponse($hotels->toArray(), 'Hotels retrieved successfully.');
    }
}
