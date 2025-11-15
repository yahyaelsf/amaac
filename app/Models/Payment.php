<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'username', 'wallet_address','price', 'status'];

    public function user()
    {
        return $this->belongsTo(TUser::class, 'user_id', 'pk_i_id');
    }

    public function plan() {
        return $this->belongsTo(TPlan::class , 'plan_id', 'pk_i_id');
    }

         public function commission()
    {
        return $this->hasOne(Commission::class);
    }
        protected static function booted()
    {
        static::deleting(function ($payment) {
            // حذف الـ Commission المرتبط
            $payment->commission()->delete();
        });
    }
}
