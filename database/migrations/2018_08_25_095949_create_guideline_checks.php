<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidelineChecks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guideline_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned()->index();
            $table->integer('guideline_ref_id')->unsigned()->index();
            $table->string('guideline_result')->nullable();
            $table->timestamps();
            
            //外部キー設定
            $table->foreign('process_id')->references('id')->on('process_results')->onDelete('cascade');
            $table->foreign('guideline_ref_id')->references('id')->on('guidelines')->onDelete('restrict'); // no actionだと参照表示時にエラーとなる
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guideline_checks');
    }
}
