<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\View\View;

class RoomController extends Controller
{
    public function show(Request $request): View
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
                ->groupBy('rooms.id')
                ->get();

            $rooms = $query
                ->take(9)
                ->skip($offset);

            echo $query->count();
            $count = ceil($query->count() / 9);
        } else {
            $count = ceil(Room::count() / 9);
            $rooms = Room::select('*')
                ->take(9)
                ->skip($offset)
                ->get();
        }

        return view('rooms', ["rooms" => $rooms, "page" => $page, "pages" => $count, "from" => $from, "to" => $to]);
    }
}