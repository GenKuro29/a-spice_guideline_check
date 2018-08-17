<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencesTableForBp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bp_id')->unsigned()->index();
            $table->string('evidence_type')->nullable();
            $table->string('evidence_comment')->nullable();
            $table->string('evidence_document')->nullable();
            $table->timestamps();
            
            //外部キー設定
            $table->foreign('bp_id')->references('id')->on('bp_results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidences');
    }
}
