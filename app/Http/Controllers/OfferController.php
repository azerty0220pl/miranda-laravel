<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\View\View;

class OfferController extends Controller
{
    public function index(Request $request): View
    {
        require_once app_path('Utils/price.php');

        $page = $request->query('page');
        $offset = $page * 9;

        $query = Room::select('*')
            ->where("offer", "!=", "0");
        $count = ceil($query->count() / 9);
        $rooms = $query
            ->take(9)
            ->skip($offset)
            ->get();

        return view('offers', ["rooms" => $rooms, "page" => $page, "pages" => $count]);
    }
}