<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType = null)
    {
        $rooms = Room::byType($roomType)->get(); //uses scope defined in room model scopeByType method

        return view('rooms.index', ['rooms' => $rooms]);
        //return response()->json($rooms);
    }
}
