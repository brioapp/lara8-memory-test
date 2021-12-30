<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

class PingController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'status' => 'ok',
            'timestamp' => Carbon::now(),
        ]);
    }
}
