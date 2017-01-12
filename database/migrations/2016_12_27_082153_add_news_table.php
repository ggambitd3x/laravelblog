<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('news', function(Blueprint $table) {
//            $table->increments('id');
//            $table->string('title', 255);
//            $table->text('text');
//        });

//        Schema::table('users', function(Blueprint $table){
//            $sql = 'CREATE TABLE `news` (
//                      `id` INT AUTO_INCREMENT,
//                      `title` VARCHAR (255) NOT NULL,
//                      `text` TEXT NOT NULL,
//                      PRIMARY KEY(`id`)
//                    )';
//            DB::connection()->getPdo()->exec($sql);
//        });

        $sql = 'CREATE TABLE `news` (
                      `id` INT AUTO_INCREMENT,
                      `title` VARCHAR (255) NOT NULL,
                      `text` TEXT NOT NULL,
                      PRIMARY KEY(`id`)
                    )';
        DB::connection()->getPdo()->exec($sql);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
