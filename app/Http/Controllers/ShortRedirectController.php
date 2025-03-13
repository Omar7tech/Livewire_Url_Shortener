<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class ShortRedirectController extends Controller
{
    public function redirect(string $code)
    {
        $link = Link::select(['id', 'original_url'])
            ->where('short_code', $code)
            ->first();

        if ($link) {
            // Increment clicks asynchronously
            Link::withoutTouching(function () use ($link) {
                Link::where('id', $link->id)->update([
                    'clicks' => \DB::raw('clicks + 1')
                ]);
            });

            return redirect()->away($link->original_url);
        }

        return abort(404);
    }
}
