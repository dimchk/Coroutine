<?php

namespace App\Repositories;

use App\Adapters\UserDataAdapter;
use App\Models\User;
use Exception;

class UserRepository
{
    private UserDataAdapter $dataAdapter;


    /**
     * UserMapper constructor.
     * @param UserDataAdapter $dataAdapter
     */
    public function __construct(UserDataAdapter $dataAdapter)
    {
        $this->dataAdapter = $dataAdapter;
    }

    public function findById(int $id): User
    {
        $state = $this->dataAdapter->findById($id);
        if (is_null($state)) {
            throw new Exception("User not found");
        }

        return User::fromState($state);
    }

    public function findByEmail(string $email): User
    {
        $state = $this->dataAdapter->findByEmail($email);
        if (is_null($state)) {
            throw new Exception("User not found");
        }

        return User::fromState($state);

    }

    public function findByTelephone(string $telephone): User
    {
        $state = $this->dataAdapter->findByTelephone($telephone);
        if (is_null($state)) {
            throw new Exception("User not found");
        }

        return User::fromState($state);

    }


}
