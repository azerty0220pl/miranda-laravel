<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View {
        require_once app_path('Utils/price.php');
        $rooms = Room::all('*');
        return view('index', ['rooms' => $rooms]);
    }
}
