<?php

namespace App;

use App\Room;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use SoftDeletes, Notifiable;

    protected $fillable = [
        'room_id', 'start', 'end', 'is_reservation', 'is_paid', 'notes',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'bookings_users', 'booking_id', 'user_id');
    }
}
