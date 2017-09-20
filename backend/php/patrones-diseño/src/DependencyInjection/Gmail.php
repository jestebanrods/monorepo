<?php

namespace jestebanrs\DependencyInjection;

class Gmail implements EMailInterface
{
    /**
     * @param $subject
     * @param $to
     * @param $from
     * @return string
     */
    public function send($subject, $to, $from): string
    {
        return "Enviar correo mediante Gmail a: $to, con el asunto: '$subject', de: $from";
    }
}