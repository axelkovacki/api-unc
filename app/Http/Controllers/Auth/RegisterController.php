<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use App\Http\Resources\User as UserResource;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();

        foreach($data as $item) {
            User::create([
                'name' => $item['name'],
                'cpf' => $item['cpf'],
                'course' => $item['course'],
                'password' => Hash::make($item['password']),
            ]);
        }

        return response()->json([
            'sucess' => true
        ]);
    }
}
