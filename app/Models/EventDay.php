<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDay extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function showtimes()
    {
        return $this->hasMany(EventDayShowtime::class);
    }

    public function eventDayShowtimes()
    {
        return $this->hasMany(EventDayShowtime::class);
    }
}
