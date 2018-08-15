<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prj_name');
            $table->string('prj_purpose');
            $table->string('assessed_organization');
            $table->date('assessment_date')->nullable();
            $table->string('process_scope')->nullable();
            $table->string('location')->nullable();
            $table->string('assessor')->nullable();
            $table->string('interviewed_person')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
