<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;

    protected $table = 'event_image';

    protected $primaryKey = 'eImgID';

    protected $fillable = [
        'eImgName',
        'eImgPath',
        'eID'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'eID', 'eID');
    }
}
