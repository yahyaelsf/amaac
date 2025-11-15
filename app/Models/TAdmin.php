<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTimeInterface;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TAdmin extends Authenticatable
{
    use SoftDeletes;
    use Filterable;
    use HasRoles;


    protected $table = "t_admin";
    protected $primaryKey = 'pk_i_id';
    protected $appends = ['enabled_html'];

    protected $hidden = ['s_password', 'remember_token'];
    protected $fillable = [
        's_name',
        's_email',
        's_password'
    ];

    const CREATED_AT = 'dt_created_date';
    const UPDATED_AT = 'dt_modified_date';
    const DELETED_AT = 'dt_deleted_date';


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function scopeEnabled($query)
    {
        return $query->where('b_enabled', 1);
    }


    public function getAuthPassword()
    {
        return $this->s_password;
    }

//
    public function setPasswordAttribute($value)
    {
        $this->attributes['s_password'] = $value;
    }


    public function setSEmailAttribute($email) {
        $this->attributes['s_email'] = strtolower($email);
    }

    public function setSPasswordAttribute($value)
    {
        $this->attributes['s_password'] = bcrypt($value);
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
