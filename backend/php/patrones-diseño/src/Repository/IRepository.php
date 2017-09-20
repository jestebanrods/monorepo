<?php

namespace jestebanrs\Repository;

use jestebanrs\Repository\User;

interface IRepository
{
    public function addUser(User $user): bool;

    public function isUsernameUnique($username): bool;

    public function getUserById(int $id): User;
}