<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPlan extends BaseModel
{
    protected $table = "t_plans";
    protected $fillable = ['i_price', 'b_enabled','s_title', 's_features','e_type'];
    protected $casts = [
        's_features' => 'array',
    ];
    public function getEnabledHtmlAttribute()
    {
        return '
            <label class="switch switch-primary">
                <input
                    type="checkbox"
                    class="switch-input js-switch"
                    name="status"
                    data-id="' . $this->getKey() . '"
                    ' . ($this->b_enabled == 1 ? 'checked' : '') . '>
                <span class="switch-toggle-slider">
                    <span class="switch-on"><i class="ti ti-check"></i></span>
                    <span class="switch-off"><i class="ti ti-x"></i></span>
                </span>
                <span class="switch-label"></span>
            </label>';
    }
}
