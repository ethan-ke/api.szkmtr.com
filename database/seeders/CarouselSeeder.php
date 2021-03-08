<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::insert(
            [
                [
                    'title' => '',
                    'path' => 'static/images/carousel-1.png',
                ],
                [
                    'title' => '',
                    'path' => 'static/images/carousel-2.png',
                ],
            ]
        );
    }
}
