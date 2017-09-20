<?php

namespace jestebanrs\DependencyInjection;

class Mailing
{
    /**
     * @var EMailInterface
     */
    private $eProvider;

    /**
     * Mailing constructor.
     * @param EMailInterface $_eProvider
     */
    public function __construct(EMailInterface $_eProvider)
    {
        $this->eProvider = $_eProvider;
    }

    /**
     * @param array $mails
     */
    public function sendToUsers($mails = [])
    {
        foreach ($mails as $mail) {
            echo $this->eProvider->send('Prueba', $mail, 'jossie@mail.com');
        }
    }
}