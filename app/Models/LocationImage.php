<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationImage extends Model
{
    use HasFactory;

    protected $table = 'location_images';

    protected $primaryKey = 'loImgID';

    protected $fillable = [
        'loImgName',
        'loImgPath',
        'loID'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'loID', 'loID');
    }
}
