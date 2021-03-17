<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class createRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => '1',
                'name' => 'isAdmin'
            ],
            [
                'id' => '2',
                'name' => 'isUser'
            ]
        ];
        foreach ($user as $key => $value) {
            Roles::create($value);
        };
    }
}
