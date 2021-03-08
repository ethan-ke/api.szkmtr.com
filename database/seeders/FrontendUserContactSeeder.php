<?php

namespace Database\Seeders;

use App\Models\FrontendUserContact;
use Illuminate\Database\Seeder;

class FrontendUserContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrontendUserContact::insert(
            [
                [
                    'frontend_user_id' => 1,
                    'name' => 'Ethan',
                    'sex' => 0,
                    'phone' => '18529536820',
                ],
                [
                    'frontend_user_id' => 1,
                    'name' => '柯柯',
                    'sex' => 1,
                    'phone' => '18529536820',
                ],
            ]
        );
    }
}
