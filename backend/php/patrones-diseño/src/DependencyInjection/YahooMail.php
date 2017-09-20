<?php

namespace jestebanrs\DependencyInjection;

class YahooMail implements EMailInterface
{
    /**
     * @param $subject
     * @param $to
     * @param $from
     * @return string
     */
    public function send($subject, $to, $from): string
    {
        return "Enviar correo mediante YahooMail a: $to, con el asunto: '$subject', de: $from";
    }
}