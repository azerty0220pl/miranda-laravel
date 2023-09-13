<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\View\View;

class RoomController extends Controller
{
    public function index(Request $request): View
    {
        require_once app_path('Utils/price.php');

        $page = $request->query('page');
        $from = $request->query('from');
        $to = $request->query('to');
        $offset = $page * 9;

        if ($from != 0 && $to != 0) {
            $query = Room::select('rooms.*')
                ->leftjoin(
                    'bookings',
                    'rooms.id',
                    '=',
                    'bookings.room'
                )
                ->whereNull('bookings.id')
                ->orWhere('bookings.check_in', '>', $to)
                ->orWhere('bookings.check_out', '<', $from)
                ->orderBy('rooms.room_name')
                ->groupBy('rooms.id');

            $count = ceil($query->get()->count() / 9);
            $rooms = $query
                ->take(9)
                ->skip($offset)
                ->get();
        } else {
            $count = ceil(Room::count() / 9);
            $rooms = Room::select('*')
                ->take(9)
                ->skip($offset)
                ->get();
        }

        return view('rooms', ["rooms" => $rooms, "page" => $page, "pages" => $count, "from" => $from, "to" => $to]);
    }

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