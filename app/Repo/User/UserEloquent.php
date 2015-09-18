<?php namespace Repo\User;

use App\User;

class UserEloquent implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return User::paginate(2);
    }

    public function getByID($id)
    {
        return User::where('id',$id)->get();
    }

    public function create($user)
    {
        if(isset($user['avatar'])){
            $user['avatar']->move('upload',$user['username'].'_avatar.jpg');
        }

        return User::create([
            'name' => $user['username'],
            'email' => $user['email'],
            'password' => bcrypt($user['password']),
            'activate' => $user['activate'],
            'remember_token' => $user['_token'],
            'image' => $user['username'].'_avatar'
        ]);
    }

    public function update($user, $id)
    {
        if(isset($user['avatar'])){
            if(file_exists('upload/'.$user['username'].'_avatar.jpg')) {
                unlink('upload/' . $user['username'] . '_avatar.jpg');
            }
            $user['avatar']->move('upload',$user['username'].'_avatar.jpg');
        }
        return User::where('id',$id)
            -> update([
                'name' => $user['username'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'activate' => $user['activate'],
                'remember_token' => $user['_token'],
                'image' => $user['username'].'_avatar'
            ]);
    }

    public function delete($ids)
    {
        foreach($ids as $id)
        {
            User::where('id',$id)
                ->delete();
        }
    }

    public function activate($ids)
    {
        foreach($ids as $id)
        {
            User::where('id',$id)
                ->update(['activate' => 1]);
        }
    }
}