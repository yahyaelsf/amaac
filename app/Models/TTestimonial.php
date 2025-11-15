<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;

class TTestimonial extends BaseModel
{
    protected $table = "t_testimonials";
    protected $fillable = ['s_cover', 'b_enabled','s_title','i_value', 's_description'];
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
