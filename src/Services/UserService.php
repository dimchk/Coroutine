<?php

namespace App\Services;

use App\Adapters\UserDataAdapter;
use App\Models\User;
use App\Repositories\UserRepository;

final class UserService
{
    private UserRepository $userRepository;

    /**
     * UserService constructor.
     * @param UserDataAdapter $adapter
     */
    public function __construct(UserDataAdapter $adapter)
    {
        $this->userRepository = new UserRepository($adapter);
    }

    public function findById(int $id): User
    {
        return $this->userRepository->findById($id);
    }

    public function findByEmail(string $email): User
    {
        return $this->userRepository->findByEmail($email);
    }

    public function findByTelephone(string $telephone): User
    {
        return $this->userRepository->findByTelephone($telephone);
    }
}
