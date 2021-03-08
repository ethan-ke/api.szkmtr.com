<?php

namespace Database\Seeders;

use App\Models\BackendUser;
use Illuminate\Database\Seeder;

class BackendUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackendUser::insert(
            [
                [
                    'nickname' => 'Administrator',
                    'username' => 'admin',
                    'password' => '$2y$10$LEXVu43k4Icf7Dpz.xl2o.eeySYx7vW7xgoPriuFEsIbMYwS91c6O',
                ]
            ]
        );
    }
}
