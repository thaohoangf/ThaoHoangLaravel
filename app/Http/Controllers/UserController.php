<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repo\User\UserInterface;
use App\Http\Requests;
use App\Http\Requests\UserRequest;

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
        $lastPage = $this->user->getAll()->lastPage();
        return redirect('list-user?page='.$lastPage);
    }

    public function getEditUser($id,$page)
    {
        $infor = $this->user->getByID($id);
        return view('user.edit-user')->with(['userInfor'=> $infor,
                                            'page' => $page]);
    }

    public function postEditUser(UserRequest $request, $id, $page)
    {
        $this->user->update($request->all(), $id);
        return redirect('list-user?page='.$page);
    }

    public function deleteOrActivate(Request $request,$page)
    {
        if($request->get('check') == 'Activate'){
            $this->user->activate($request->get('checkbox'));
            return redirect('list-user?page='.$page);
        }

        elseif($request->get('check') == 'Delete'){
            $this->user->delete($request->get('checkbox'));
            if($this->user->getAll()->lastPage() < $page) {
                $page--;
            }
            return redirect('list-user?page=' . $page);
        }
    }

}
