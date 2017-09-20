<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
use DI\ContainerBuilder;
use jestebanrs\DependencyInjection\EMailInterface;
use jestebanrs\DependencyInjection\Gmail;
use jestebanrs\DependencyInjection\Hotmail;
use jestebanrs\DependencyInjection\Mailing;
use jestebanrs\DependencyInjection\YahooMail;
use PHPUnit\Framework\TestCase;

class MailDITest extends TestCase
{
    public function test_it_should_be_send_a_email_with_Gmail()
    {
        $mailing = $this->instanceDependencyClass(Mailing::class, Gmail::class);
        $mails = ['admin@mail.com'];
        $mailing->sendToUsers($mails);
        $this->expectOutputString("Enviar correo mediante Gmail a: admin@mail.com, con el asunto: 'Prueba', de: jossie@mail.com");
    }

    public function test_it_should_be_send_a_email_with_Hotmail()
    {
        $mailing = $this->instanceDependencyClass(Mailing::class, Hotmail::class);
        $mails = ['admin@mail.com'];
        $mailing->sendToUsers($mails);
        $this->expectOutputString("Enviar correo mediante Hotmail a: admin@mail.com, con el asunto: 'Prueba', de: jossie@mail.com");
    }

    public function test_it_should_be_send_a_email_with_YahooMail()
    {
        $mailing = $this->instanceDependencyClass(Mailing::class, YahooMail::class);
        $mails = ['admin@mail.com'];
        $mailing->sendToUsers($mails);
        $this->expectOutputString("Enviar correo mediante YahooMail a: admin@mail.com, con el asunto: 'Prueba', de: jossie@mail.com");
    }

    private function instanceDependencyClass($class, $dependency)
    {
        $container = ContainerBuilder::buildDevContainer();
        $container->set(EMailInterface::class, \DI\object($dependency));
        return $container->get($class);
    }
}