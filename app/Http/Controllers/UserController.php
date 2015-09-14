<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repo\User\UserInterface;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $infor = $this->user->getAll();
        return view('user.list-users')->with('users',$infor);
    }

    public function getAddUser()
    {
        return view('user.add-user');
    }

    public function postAddUser(UserRequest $request)
    {
        $this->user->create($request->all());
        return redirect('home');
    }

    public function getEditUser($id)
    {
        $infor = $this->user->getByID($id);
        return view('user.edit-user')->with('userInfor',$infor);
    }

    public function postEditUser(UserRequest $request, $id)
    {
        $this->user->update($request->all(), $id);
        return redirect('list-user');
    }
}
