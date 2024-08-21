<?php

namespace App\Http\Repositories;
use Illuminate\Database\Eloquent\Model;

interface UserRepository
{
    public function register($credential): Model;
}
