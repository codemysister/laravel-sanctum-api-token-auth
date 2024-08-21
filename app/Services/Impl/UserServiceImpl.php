<?php

namespace App\Services\Impl;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;

class UserServiceImpl implements UserService
{

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($credential): array
    {
        $data = $this->userRepository->register($credential);
        return [
            "data" => $data
        ];
    }

}
