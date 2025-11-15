<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogSection extends BaseModel
{
    protected $table = "t_blog_sections";
    protected $fillable = ['s_title','s_description','fk_i_blog_id'];
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'fk_i_blog_id', 'pk_i_id');
    }
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
