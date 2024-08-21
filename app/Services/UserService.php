<?php

namespace App\Services;
use App\Http\Requests\RegisterRequest;

interface UserService
{
    public function register($credential): array;
}
