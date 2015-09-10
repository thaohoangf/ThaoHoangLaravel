<?php
/**
 * Created by PhpStorm.
 * User: Thao
 * Date: 9/7/2015
 * Time: 17:30
 */

namespace Repo;

use App\User;
use Repo\User\UserEloquent;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Repo\User\UserInterface', function()
        {
           return new UserEloquent(new User());
        });
    }
}