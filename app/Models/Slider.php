<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends BaseModel
{
    protected $fillable = ['s_title','s_description','s_cover','b_show_buttons'];
}
