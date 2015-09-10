<?php namespace Repo\User;

use App\User;

class UserEloquent implements UserInterface
{
    protected $perpage;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return User::paginate(2);
    }
}