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
        $count = Booking::where('user_id', $user_id)->where('service_id', $id)->where('status', 0)->count();
        if ($count > 0)
            return redirect()->back()->with('error', 'Buyurtma berilgan.');
        $booking = new Booking();
        $booking->user_id = $user_id;
        $booking->service_id = $id;
        $booking->save();
        return redirect()->back()->with('success', 'Buyurtma berildi.');
    }

    public function booking_list(){
        $user_id = auth()->id();
        if ($user_id == 1){
            $bookings = Booking::orderby('id', 'DESC')->get();
            $role = "admin";
        }else{
            $bookings = Booking::orderby('id', 'DESC')->where('user_id', $user_id)->get();
            $role = "user";
        }
        return view('admin.bookings.index', compact('bookings', 'role'));
    }

    public function status($id){
        $booking = Booking::findorfail($id);
        $booking->status = 1;
        $booking->save();
        return redirect()->back()->with('success', 'Tasdiqlandi.');
    }

    public function delete($id){
        $booking = Booking::findorfail($id);
        $user_id = auth()->id();
        if ($user_id == 1){
            $booking->delete();
        }else{
            if ($booking->status == 0){
                $booking->delete();
            }
            else {
                return redirect()->back()->with('error', 'Xatolik yuz berdi');
            }
        }
        return redirect()->back()->with('success', 'Buyurtma bekor qilindi.');
    }
}
