<?php

namespace App\Users\Controllers;

use App\Users\Models\User;
use App\Users\Services\UserService;

class UserController
{
    /**
     * @var UserService
     */
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function show(User $user)
    {

    }
}
