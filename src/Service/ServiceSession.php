<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

Class ServiceSession
{
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function sessionControl(): string
    {   
        $session = $this->requestStack->getSession();
        
        if ($session->get('_locale') === null) {
            $local = 'en';
        } else {
            $local = $session->get('_locale');
        }
       
        return $local;
    }
}