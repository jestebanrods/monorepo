<?php

namespace jestebanrs\DependencyInjection;

/**
 * Interface EMailInterface
 * @package jestebanrs\DependencyInjection
 */
interface EMailInterface
{
    /**
     * @param $subject
     * @param $to
     * @param $from
     * @return string
     */
    public function send($subject, $to, $from): string;
}