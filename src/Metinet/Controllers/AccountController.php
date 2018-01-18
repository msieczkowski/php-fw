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

        $email = $request->getQuery()->get('email');
        $password = $request->getQuery()->get('password');
        $accountRepository = new AccountRepository();
        $account = $accountRepository->verifyCredentials($email, $password);

        if(!isset($_SESSION)){
            session_start();
        }

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
        $email = $request->getQuery()->get('email');
        $password = $request->getQuery()->get('password');

        if ($GLOBALS['accountRepository']->verifyExisting($email))
        {
            $account = new Account($email, $password);
            $accountRepository = new AccountRepository();
            $accountRepository->add($account);

            return new Response(sprintf('Le compte %s a bien été créé ',$email));
        }
    }
}
