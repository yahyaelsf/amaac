<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inside extends Model
{
    public function watchlists()
{
    return $this->belongsToMany(Watchlist::class, 'watchlist_inside');
}
}
