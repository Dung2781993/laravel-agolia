<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Booking extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'customer_id',
        'nanny_id',
        'start_time',
        'end_time',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'bookings_index';
    }
}
