<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ServiceSeeder::class,
            CarouselSeeder::class,
            BackendUserSeeder::class,
            SystemDomainSeeder::class,
            ServiceDistrictItemSkuSeeder::class,
            FrontendUserContactSeeder::class,
            ServiceDistrictSeeder::class,
            ServiceDistrictItemSeeder::class,
        ]);
    }
}
