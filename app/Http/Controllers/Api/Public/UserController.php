<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResource;
use App\Models\User;

class UserController extends Controller
{

    // public function index()
    // {
    //     $users = User::latest()->take(10)->get();
    //     return new ApiResource(true, 'users berhasil diload', $users);
    // }

    public function index()
    {
        $users = User::latest()->take(10)->get();
        
        // $users = User::all();
        $responseData = [
            'success' => true,
            'message' => 'users berhasil diload',
            'data' => $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'username' => $user->username,
                    'avatar' => $user->avatar,
                    'phone' => $user->phone,
                    'bio' => $user->bio,
                    // 'created_at' => $user->created_at,
                    // 'updated_at' => $user->updated_at,
                ];
            }),
        ];
        
        return response()->json($responseData, 200, [], JSON_PRETTY_PRINT);
    }
}
