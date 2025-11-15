<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Resourceable;
class Blog extends BaseModel
{
    use Resourceable;
    protected $table = "t_blogs";
    protected $fillable = ['s_title','s_description','s_subtitle','s_writer','s_cover','i_view','fk_i_category_id'];
   public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_blog', 'fk_i_blog_id', 'fk_i_category_id');
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
