<?php

namespace App\Http\Controllers\Map;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coordinates()
    {
        $coordinates = Review::select([
                'latitude',
                'longitude'
            ])
            ->get();

        return response()->json($coordinates);
    }
}
