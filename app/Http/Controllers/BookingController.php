<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = Booking::with(['room.roomType', 'users:name'])->paginate(10); // we can access room's roomType relation and get it like that, also we can get a relation field by : like that(e.g user's name)

        return view('bookings.index')
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('users')->get()->pluck('name', 'id')->prepend('none');
        $rooms = DB::table('rooms')->get()->pluck('number', 'id');

        return view('bookings.create')
            ->with('users', $users)
            ->with('rooms', $rooms)
            ->with('booking', (new Booking()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking = Booking::create($request->input());

        $booking->users()->attach($request->input('user_id')); // create a many relation with attach
        // $user = $booking->users()->create(['name' => 'test', 'email' => 'wasg@gmail.com', 'password' => '7d,4BqTz5xW']); // we can create a user via a relation like that, but don't do that, password doesn't hash.
        return redirect()->action('BookingController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $users = DB::table('users')->get()->pluck('name', 'id')->prepend('none');
        $rooms = DB::table('rooms')->get()->pluck('number', 'id');
        $bookingsUser = DB::table('bookings_users')->where('booking_id', $booking->id)->first();
        return view('bookings.edit')
            ->with('bookingsUser', $bookingsUser)
            ->with('users', $users)
            ->with('rooms', $rooms)
            ->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->fill($request->input());
        $booking->save();
        $booking->users()->sync([$request->input('user_id')]); // update the records for the relationships between bookings and users to create any relationship that needed and delete any that do not match.

        return redirect()->action('BookingController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->users()->detach();
        $booking->delete();
        return redirect()->action('BookingController@index');
    }
}
