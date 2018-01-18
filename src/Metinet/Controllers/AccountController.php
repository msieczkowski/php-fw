<?php

namespace Metinet\Controllers;

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Domain\Account;
use Metinet\Repository\AccountRepository;

class AccountController
{
    public function login(Request $request): Response
    {
        $account = [new Account('maxime@test.com', 'test')];
        $accountRepository = new AccountRepository($account);

        $email = $request->getQuery()->get('email');
        $password = $request->getQuery()->get('password');

        $account = $accountRepository->verifyCredentials($email, $password);

        session_start();
        $_SESSION['email'] = $account->getMail();

        return new Response(sprintf('hello %s, vous etes connecté ',$_SESSION['email']));
    }

    public function logout()
    {
        session_destroy();
        return new Response(sprintf('vous êtes maintenant déconnecté'));
    }

    public function register(Request $request): Response
    {
        
    }
}
