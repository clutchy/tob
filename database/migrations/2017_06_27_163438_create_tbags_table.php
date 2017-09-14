<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbags', function (Blueprint $table) {
            $table->increments('tbag_id');
            $table->string('tbag_name', 100);
            $table->string('description', 250);
            $table->string('img_name', 255);
            $table->decimal('tbag_price', 5, 2);
            $table->double('open_width', 15, 8);
            $table->double('open_heigth', 15, 8);
            $table->double('close_width', 15, 8);
            $table->double('close_heigth', 15, 8);

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
        Schema::drop('tbags');
    }
}
