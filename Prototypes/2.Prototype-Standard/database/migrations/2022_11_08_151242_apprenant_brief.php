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
        Schema::create('apprenant_brief', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("apprenant_id");
            $table->unsignedInteger("brief_id");
            $table->foreign('apprenant_id')
            ->references('id')
            ->on('apprenant')
            ->onDelete('cascade');
            $table->foreign('brief_id')
            ->references('id')
            ->on('briefs')
            ->onDelete('cascade');

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
