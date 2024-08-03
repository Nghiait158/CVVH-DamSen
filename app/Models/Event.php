<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';

    protected $primaryKey = 'eID';

    protected $fillable = [
        'eName',
        'eStatus',
        'eDate',
        'eDescription',
        'eContent'
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class, 'eID', 'eID');
    }
}
