<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Administrator',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Maria Cruz',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Pedro Santos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Ana Reyes',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Carlos Garcia',
                'role' => 'Staff',
            ],
        ];

        return view('users/index', [
            'users' => $users,
        ]);
    }
}
