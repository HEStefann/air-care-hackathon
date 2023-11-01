<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollutionReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category',
        'type',
        'image',
        'description',
        'case_status',
        'date',
        'lat',
        'lng',
        'address',
        'pollutionLevel',
        'municipality',
        'day_appended',
        'day_closed',
        'status',
        'inspector_description',
        'perpetrator',
        'inspector_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function inspector()
    {
        return $this->belongsTo(User::class, 'inspector_id');
    }
}
