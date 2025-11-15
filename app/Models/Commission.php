<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = [
    'referrer_id',
    'payment_id',
    'commission_amount',
    'commission_rate',
    'is_withdrawn',
    'payout_address'
    ];

    protected $casts = [
        'is_withdrawn' => 'boolean',
    ];
    public function referrer()
    {
    return $this->belongsTo(TUser::class, 'referrer_id','pk_i_id');
    }


    public function payment()
    {
    return $this->belongsTo(Payment::class, 'payment_id');
    }
}
