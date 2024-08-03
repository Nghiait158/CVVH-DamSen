<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey = 'categoryID';

    protected $fillable = [
        'categoryName',
        'areaID'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'areaID', 'areaID');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'categoryID', 'categoryID');
    }
}
