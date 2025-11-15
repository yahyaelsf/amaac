<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocsSection extends BaseModel
{
    protected $table = "t_docs_sections";
    protected $fillable = ['s_title','s_description','slug','fk_i_page_id','i_order'];
    public function page()
    {
        return $this->belongsTo(DocsPage::class, 'fk_i_page_id', 'pk_i_id');
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
