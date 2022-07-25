<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('date_birth')->nullable();
            $table->string('cpf');
            $table->string('rg')->nullable();
            $table->string('address')->nullable();
            $table->integer('address_number')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
