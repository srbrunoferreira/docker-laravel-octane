<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

final class ApiTokenController extends Controller
{
    public function store()
    {
        $token = new Token();

        $token->createToken(Hash::make(bin2hex(random_bytes(30))));

        $crypt = Crypt::encrypt('hey');

        // It is better to use Sanctum rather then using Hash:: or Crypt::

        return $token;
    }
}
