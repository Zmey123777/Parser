<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('news', function (Blueprint $table) {
                $table->timestamp('id')->unique();
                $table->string('title', 150);
                $table->text('description');
                $table->string('author', 150)->nullable();
                $table->string('image', 100)->nullable();

            });
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
};
