<?php

namespace App;

use App\RoomType;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function scopeByType($query, $roomTypeId = null)
    {
        if (!is_null($roomTypeId)) {
            $query->where('room_type_id', $roomTypeId);
        }
        return $query;

    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
