<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocsPage extends BaseModel
{
    protected $table = "t_docs_pages";
    protected $fillable = ['s_title','s_cover','s_description','fk_i_parent_id','slug','e_type'];
    public function sections()
    {
        return $this->hasMany(DocsSection::class, 'fk_i_page_id', 'pk_i_id')->enabled();
    }
    public function children()
    {
        return $this->hasMany(DocsPage::class, 'fk_i_parent_id', 'pk_i_id')->enabled();
    }


    public function parent()
    {
        return $this->belongsTo(DocsPage::class, 'fk_i_parent_id', 'pk_i_id');
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
