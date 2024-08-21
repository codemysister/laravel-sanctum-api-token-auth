<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request): JsonResponse
    {
        $data = $this->userService->register(["name" => $request->name, "email" => $request->email, "password" => $request->password, "password_confirmation" => $request->password_confirmation]);

        $token = $data["data"]->createToken("user_token")->plainTextToken;

        return response()->json([
            "data" => $data["data"],
            "token" => $token,
            "status" => 201,
            "message" => "Success Register User"
        ]);
    }
}
