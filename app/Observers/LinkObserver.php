<?php
namespace App\Observers;

use App\Models\Link;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;

class LinkObserver
{

    public function creating(Link $link)
    {
        $user = Auth::user();

        if ($user && $user->links()->count() >= 10) {
            throw new \Exception('You cannot create more than 10 links.');
        }
    }


    public function created(Link $link)
    {
        $link->update([
            'short_code' => Hashids::encode($link->id),
        ]);
    }
}
