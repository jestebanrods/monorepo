<?php

namespace jestebanrs\DependencyInjection;

class Hotmail implements EMailInterface
{
    /**
     * @param $subject
     * @param $to
     * @param $from
     * @return string
     */
    public function send($subject, $to, $from): string
    {
        return "Enviar correo mediante Hotmail a: $to, con el asunto: '$subject', de: $from";
    }
}