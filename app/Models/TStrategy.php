<?php

namespace App\Models;

use App\Traits\Resourceable;
use Illuminate\Database\Eloquent\Model;

class TStrategy extends BaseModel
{
    use Resourceable;
    protected $table = "t_strategies";
    protected $fillable = ['s_title','s_description','s_key','s_link','s_cover'];

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
