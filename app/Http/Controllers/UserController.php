<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function unsubscribe($uuid)
    {
        User::where('uuid', $uuid)->update([
            'subscribed' => 0
        ]);
    }
}
