<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use Repo\User\UserInterface;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $user;


    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getRegister()
    {
        return 'Thao Honag';
    }

    public function index()
    {
        $infor = $this->user->getAll();
        return view('user.list-users')->with('users',$infor);
    }
}
