<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('user')->only('booking');
    }

    public function booking(int $id){
        $user_id = auth()->id();
        $count = Booking::where('user_id', $user_id)->where('service_id', $id)->count();
        if ($count > 0)
            return redirect()->back()->with('error', 'Buyurtma berilgan.');
        $booking = new Booking();
        $booking->user_id = $user_id;
        $booking->service_id = $id;
        $booking->save();
        return redirect()->back()->with('success', 'Buyurtma berildi.');
    }
}
