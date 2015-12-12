<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('texts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('pagename');
$table->string('slug');
$table->string('lang');
$table->string('title');
$table->string('descr');
$table->string('h1');
$table->text('h1_text');
$table->string('h2');
$table->text('h2_text');

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
        Schema::drop('texts');
    }

}
