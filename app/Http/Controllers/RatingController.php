<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request){
        $booking = Booking::findorfail($request['booking_id']);

        if (auth()->id() == $booking->user->id){
            $count = Rating::where('user_id', $booking->user->id)
                ->where('heath_center_id', $booking->service->health_centers_id)
                ->where('booking_id', $booking->id)->count();
            if ($count == 0){
                $rating = new Rating();
                $rating->user_id = $booking->user->id;
                $rating->heath_center_id = $booking->service->health_centers_id;
                $rating->booking_id = $booking->id;
                $rating->comment = $request['comment'];
                $rating->rating = $request['rating'];
                $rating->save();
                return redirect()->back()->with('success', 'Izoh qoldirildi.');
            }
        }
        return redirect()->back()->with('error', 'Xatolik yuz berdi.');
    }
}
