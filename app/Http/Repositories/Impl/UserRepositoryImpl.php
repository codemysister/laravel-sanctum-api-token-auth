<?php

namespace App\Http\Repositories\Impl;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryImpl implements UserRepository
{

    public function register($credential): Model
    {
        $data = User::create($credential);
        return $data;
    }
}
