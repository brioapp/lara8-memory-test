<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Resources\AvatarResource;

class AvatarController extends Controller
{
    public function __invoke()
    {
        return new AvatarResource(Auth::user());
    }
}
