<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

final class ApiTokenController extends Controller
{
    public function index()
    {
        $users = Cache::remember('email', 5, function () {
            return User::all();
        });

        return $users;
    }
}
