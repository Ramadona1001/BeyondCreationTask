<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'showtimes';

    public function eventDayShowtimes()
    {
        return $this->hasMany(EventDayShowtime::class,'showtime_id');
    }
}
