<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThucVat extends Model
{
    use HasFactory;
    protected $table = 'ThucVat';


    protected $primaryKey = 'tvID';

    protected $fillable = [
        'tvName',
        'tvStatus',
        'tvDate',
        'tvDescription',
        'tvContent',
        'tvContentCSS',
        'tvContentJS',
        'tvImgPath',
    ];

    public $timestamps = true;
}
