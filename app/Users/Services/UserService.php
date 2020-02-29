<?php


namespace App\Users\Services;


use App\Users\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}
