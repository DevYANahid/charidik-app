<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'slider_image',
        'slider_title',
        'slider_category',
        'bottom_image1',
        'bottom_title1',
        'bottom_category1',
        'bottom_image2',
        'bottom_title2',
        'bottom_category2',
        'bottom_image3',
        'bottom_title3',
        'bottom_category3',
        'video_url',
    ];
}
