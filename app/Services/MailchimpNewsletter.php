<?php

namespace App\Services;

use Illuminate\Contracts\Container\BindingResolutionException;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;

class MailchimpNewsletter implements Newsletter
{
    /**
     * @param string $email
     * @param null|string $list
     * @return mixed
     * @throws BindingResolutionException
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function subscribe(string $email, ?string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }
}
