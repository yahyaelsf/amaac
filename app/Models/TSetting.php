<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TSetting extends BaseModel
{
    protected $table = "t_system_settings";

    protected $fillable = [
        's_key',
        's_value',
        'i_data_type',
        'b_enabled',
    ];
}
