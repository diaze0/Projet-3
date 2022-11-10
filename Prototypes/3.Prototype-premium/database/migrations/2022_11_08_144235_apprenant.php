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
        Schema::create('apprenant', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Nom")->nullable();
            $table->string("Prenom")->nullable();
            $table->string("Email")->nullable();
            $table->unsignedInteger("promotion_id");
            $table->foreign('promotion_id')
            ->references('id')
            ->on('promotion')
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
