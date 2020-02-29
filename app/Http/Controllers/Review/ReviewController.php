<?php

namespace App\Http\Controllers\Review;

use App\Review;
use App\ReviewAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $reviews = Review::where('user_id', $user->id)->get();

        foreach($reviews as $review) {
            $explode = explode(' ', $review->created_at);
            unset($review->created_at);
            
            #Parse date
            $date = explode('-', $explode[0]);
            $review->date = $date[2] . '/' . $date[1] . '/' . $date[0];

            #Parse time
            $time = explode(':', $explode[1]);
            $review->time = $time[0] . ':' . $time[1];
        } 

        return response()->json(['content' => $reviews]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();

        $review = Review::create([
            'user_id' => $user->id,
            'latitude' => $data['geolocation']['latitude'],
            'longitude' => $data['geolocation']['longitude'],
        ]);

        foreach($data['questions'] as $question) {
            ReviewAnswer::create([
                'review_id' => $review->id,
                'review_question_id' => $question['answer']['review_question_id'],
                'review_question_option_id' => $question['answer']['review_question_option_id']
            ]);
        }

        return response()->json(['content' => $review]);
    }
}
