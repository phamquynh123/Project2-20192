<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getUser();

    public function getAuthor();

    public function getRequestUpdateAccount();
}
