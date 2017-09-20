<?php

namespace jestebanrs\Repository;

use DateTime;

class UserRepository implements IRepository
{
    /**
     * @var array
     */
    private static $users = array();

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        self::$users = null;
        self::$users[] = new User("usuario", new Datetime("2008-10-10"), "123456");
        self::$users[] = new User("admin", new Datetime("2000-08-10"), "654321");
        self::$users[] = new User("admin1", new Datetime("2001-08-18"), "123456");
        self::$users[] = new User("admin2", new Datetime("2022-02-01"), "654321");
        self::$users[] = new User("usuario", new Datetime("2018-10-10"), "123456");
    }

    /**
     * @param User $user
     * @return bool
     */
    public function addUser(User $user): bool
    {
        return (self::$users[] = $user) ? true : false;
    }

    /**
     * @param $username
     * @return bool
     */
    public function isUsernameUnique($username): bool
    {
        foreach (self::$users as $user) {
            return ($user->getUsername() === $username) ? false : true;
        }
    }

    /**
     * @param int $id
     * @return User
     */
    public function getUserById(int $id): User
    {
        return self::$users[$id];
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return self::$users;
    }
}