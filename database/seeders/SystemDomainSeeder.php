<?php

namespace Database\Seeders;

use App\Models\SystemDomain;
use Illuminate\Database\Seeder;

class SystemDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemDomain::insert([
            [
                'type' => 'frontend-api',
                'domain' => 'api.szkmtr.com',
            ],
            [
                'type' => 'backend-api',
                'domain' => 'api.admin.szkmtr.com',
            ],
        ]);
    }
}
