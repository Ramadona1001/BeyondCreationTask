<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDayShowtime extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function eventDay()
    {
        return $this->belongsTo(EventDay::class);
    }

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
