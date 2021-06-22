<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('division');
            $table->string('district');
            $table->string('location');
            $table->string('tenant_type')->nullable();
            $table->string('lift')->nullable();
            $table->string('rent')->nullable();
            $table->string('room_quantity')->nullable();
            $table->string('washroom_quantity')->nullable();
            $table->string('balcony_quantity')->nullable();
            $table->string('floor')->nullable();
            $table->mediumText('image')->nullable();
            $table->text('comment');
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
        Schema::dropIfExists('properties');
    }
}
