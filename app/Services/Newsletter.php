<?php

namespace App\Services;

interface Newsletter
{
    /**
     * @param string $email
     * @param null|string $list
     * @return mixed
     */
    public function subscribe(string $email, ?string $list = null);
}
