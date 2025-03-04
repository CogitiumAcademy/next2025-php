<?php

namespace App\Repository;

class UserRepository
{
    public function findAll(): array
    {
        $data = [
                    [
                        'lastname' => 'Dupont',
                        'firstname' => 'Pierre',
                        'email' => 'pdup@mail.com'
                    ],
                    [
                        'lastname' => 'Dubois',
                        'firstname' => 'Sophie',
                        'email' => 'sdubois@mail.com'
                    ],
                    [
                        'lastname' => 'Martin',
                        'firstname' => 'Jean-Pierre',
                        'email' => 'jpmartin@mail.com'
                    ]
                ];
        return $data;
    }
}