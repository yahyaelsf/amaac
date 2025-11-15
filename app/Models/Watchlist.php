<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $fillable = ['user_id', 'name'];
    protected static function booted()
    {
        static::deleting(function ($watchlist) {
            $watchlist->insides()->detach();
        });
    }

    public function user()
    {
        return $this->belongsTo(TUser::class, 'user_id');
    }
    public function insides()
    {
        // return $this->belongsToMany(Inside::class, 'watchlist_inside');
        return $this->belongsToMany(Inside::class, 'watchlist_inside', 'watchlist_id', 'inside_id');

    }
}
