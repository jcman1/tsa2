<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Jose Reyes',
                'email' => 'jose.reyes@example.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana.garcia@example.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Carlos Mendoza',
                'email' => 'carlos.mendoza@example.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers/index', [
            'customers' => $customers
        ]);
    }
}
