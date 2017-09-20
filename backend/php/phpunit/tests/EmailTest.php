<?php

use PHPUnit\Framework\TestCase;
use jestebanrs\models\Email;

final class EmailTest extends TestCase
{

    public function test_can_be_created_from_valid_email_address()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::autoInstance('user@mail.com')
        );
    }

    public function test_cannot_be_created_from_invalid_email_address()
    {
        $this->expectException(InvalidArgumentException::class);
        Email::autoInstance('user@mail');
    }

    public function test_can_be_used_as_string()
    {
        $this->assertEquals(
            'user@mail.com',
            Email::autoInstance('user@mail.com')->getEmail()
        );
    }

}
