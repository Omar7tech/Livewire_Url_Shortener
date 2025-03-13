<?php

namespace App\Models;

use App\Observers\LinkObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;


class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $guarded = ["id"];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getShortCodeAttribute($record)
    {
        return route("shorten.link", [$record]);
    }
}
