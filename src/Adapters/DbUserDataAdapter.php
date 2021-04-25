<?php

namespace App\Adapters;

class DbUserDataAdapter implements UserDataAdapter
{

    public function findById(int $id): ?array
    {
        return [
            'id' => 1,
            'name' => 'Dima',
            'surname' => 'Vol',
            'email' => 'test@test.com',
            'telephone' => '+312342341'
        ];
        // TODO: Implement findById() method.
    }

    public function findByEmail(string $email): ?array
    {
        return [
            'id' => 1,
            'name' => 'Dima',
            'surname' => 'Vol',
            'email' => 'test@test.com',
            'telephone' => '+312342341'
        ];

        // TODO: Implement findByEmail() method.
    }

    public function findByTelephone(string $telephone): ?array
    {
        return [
            'id' => 1,
            'name' => 'Dima',
            'surname' => 'Vol',
            'email' => 'test@test.com',
            'telephone' => '+312342341'
        ];

        // TODO: Implement findByTelephone() method.
    }
}
