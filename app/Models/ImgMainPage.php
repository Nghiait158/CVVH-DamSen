<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgMainPage extends Model
{
    use HasFactory;

    protected $table = 'img_main_page';

    protected $primaryKey = 'imgID';

    protected $fillable = [
        'imgName',
        'imgPath',
    ];
}
