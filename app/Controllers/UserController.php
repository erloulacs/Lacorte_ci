<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(): string
    {
        return view('user/add');   
    }

    public function addUser() {
        return view('user/add');
    }

    public function deleteUser() {
        return view('user/delete');
    }

    public function editUser() {
        return view('user/edit');
    }

    public function viewUser() {
        return view('user/view');
    }
}