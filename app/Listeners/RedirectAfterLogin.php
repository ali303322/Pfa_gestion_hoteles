<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RedirectAfterLogin
{
    public function handle(Authenticated $event)
    {
        return redirect('/');
    }
}
