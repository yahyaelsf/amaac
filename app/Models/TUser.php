<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

use DateTimeInterface;
class TUser extends BaseModel implements AuthenticatableContract
{
    use SoftDeletes;
    use Filterable;
    use Authenticatable;

    protected $table = "t_users";
    protected $primaryKey = 'pk_i_id';

    protected $hidden = ['s_password', 'remember_token'];
    protected $appends = ['enabled_html'];

    protected $fillable = [
        // 's_name',
        // 's_username',
        // 's_avatar',
        's_email',
        // 's_mobile',
        'verify_code',
        'referred_by',
        's_password',
        'payout_address'
    ];

    const CREATED_AT = 'dt_created_date';
    const UPDATED_AT = 'dt_modified_date';
    const DELETED_AT = 'dt_deleted_date';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->ref_code = strtoupper(Str::random(10)); // توليد كود تلقائي
        });
    }
    public function payments()
    {
        return $this->hasOne(Payment::class, 'user_id'); // Adjust if needed
    }
    public function referees()
    {
        return $this->hasMany(TUser::class, 'referred_by');
    }
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
