<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DetailsController extends Controller
{
    public function show($id): View
    {
        require_once app_path('Utils/price.php');

        $room = Room::find($id);
        $rooms = Room::all('*')
        ->where('room_type', '=', $room->room_type)
        ->where('id', '!=', $id);

        return view('details', ["room" => $room, "rooms" => $rooms, "post" => false]);
    }

    public function store(Request $request, $id): View
    {
        require_once app_path('Utils/price.php');

        $room = Room::find($id);
        $rooms = Room::all('*')->where('room_type', '=', $room->room_type);

        Booking::create([
            'full_name' => $request->name,
            'book_order' => date('Y-m-d'),
            'check_in' => $request->from,
            'check_out' => $request->to,
            'request' => $request->msg,
            'room' => $id
        ]);

        return view('details', ["room" => $room, "rooms" => $rooms, "post" => true]);
    }
}
