<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'area';

    protected $primaryKey = 'areaID';

    protected $fillable = [
        'areaName'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'areaID', 'areaID');
    }
}
