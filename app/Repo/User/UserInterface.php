<?php  namespace Repo\User;

interface UserInterface
{
    public function getAll();
    public function getById($id);
    public function create($user);
    public function update($user, $id);
    public function delete($id);
    public function activate($id);
}

