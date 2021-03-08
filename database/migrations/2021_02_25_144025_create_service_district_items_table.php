<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDistrictItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_district_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_district_id')->index();
            $table->string('name', '20');
            $table->string('thumbnail');
            $table->string('banner');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->index();
            $table->tinyInteger('sort')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_district_items');
    }
}
