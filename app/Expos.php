<?php

namespace App;

use App\Transformers\ExposTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expos extends Model
{
    // use SoftDeletes;

    public $transformer = ExposTransformer::class;
    // protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $table = 'civicrm_getexpos';

    protected $fillable = [
        'expo_code',
        'chategory',
        'date',
        'item_name_en',
        'item_name_fr',
        'expo_title_en',
        'expo_title_fr',
        'theme_en',
        'theme_fr',
        'city_en',
        'city_fr',
        'ec_name_en',
        'ec_name_fr',
        'color_code',
        'css_style',
        'c_name_en'
    ];

}






