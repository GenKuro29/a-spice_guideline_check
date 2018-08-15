<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned()->index();
            $table->string('bp_number');
            $table->string('bp_result')->nullable();
            $table->timestamps();
            
            //外部キー設定
            $table->foreign('process_id')->references('id')->on('process_results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bp_results');
    }
}
