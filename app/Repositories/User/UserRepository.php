<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    public function getUser()
    {
        return User::where('role_id', '!=' , config('Custom.roleAdmin'))->orWhereNull('role_id')->get();
    }

    public function getAuthor()
    {
        return User::where('role_id', '!=' , config('Custom.roleAuthor'))->orWhere('role_id', '!=' , config('Custom.roleAuthor'));
    }

    public function getRequestUpdateAccount()
    {
        return User::where('account_status', '1')->get();
    }

}
