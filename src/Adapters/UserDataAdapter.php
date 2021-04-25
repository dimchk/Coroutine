<?php

namespace App\Adapters;


interface UserDataAdapter
{
    public function findById(int $id): ?array;

    public function findByEmail(string $email): ?array;

    public function findByTelephone(string $telephone): ?array;

}
