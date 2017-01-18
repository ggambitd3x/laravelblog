<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `news` ADD COLUMN `description` VARCHAR(255) NOT NULL AFTER `title`");
        DB::statement("ALTER TABLE `news` ADD COLUMN `image` VARCHAR(255) NOT NULL");
        DB::statement("ALTER TABLE `news` ADD COLUMN `author_id` INT(11) AFTER `id`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
