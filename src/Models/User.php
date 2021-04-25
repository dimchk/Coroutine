<?php

namespace App\Models;

class User implements \JsonSerializable
{
    protected string $name;

    protected string $surname;

    protected int $id;

    protected string $email;

    protected string $telephone;

    /**
     * User constructor.
     * @param string $name
     * @param string $surname
     * @param int $id
     * @param string $email
     * @param string $telephone
     */
    public function __construct(int $id, string $name, string $surname, string $email, string $telephone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public static function fromState(array $state): User
    {
        return new self($state['id'], $state['name'], $state['surname'], $state['email'], $state['telephone']);
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }


    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'email' => $this->getEmail(),
            'telephone' => $this->getTelephone()
        ];
    }
}
