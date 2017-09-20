<?php

use jestebanrs\Repository\User;
use jestebanrs\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function test_it_should_be_able_to_construct()
    {
        $repository = new UserRepository();
        $this->assertInstanceOf(UserRepository::class, $repository);
    }

    public function test_it_should_be_create_a_new_user()
    {
        $repository = new UserRepository();
        $user = new User('jestabanrs', new DateTime('1992-11-28'), '1234567890');
        $this->assertTrue($repository->addUser($user));
    }

    public function test_it_should_be_returning_if_the_user_is_unique()
    {
        $repository = new UserRepository();
        $this->assertTrue($repository->isUsernameUnique('admin'));
    }

    public function test_it_should_be_fail_when_the_user_is_duplicate()
    {
        $repository = new UserRepository();
        $this->assertFalse($repository->isUsernameUnique('usuario'));
    }

    public function test_it_should_be_find_a_username()
    {
        $repository = new UserRepository();
        $user = $repository->getUserById(2);
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($user->getUsername(), 'admin1');
    }

    public function test_it_should_be_get_all_registers()
    {
        $repository = new UserRepository();
        $this->assertCount(5, $repository->getAll());
    }
}