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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->text('file_name');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->foreign('project_id')->on('projects')->references('id')->onDelete('cascade');
            $table->foreign('offer_id')->on('offers')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
};
