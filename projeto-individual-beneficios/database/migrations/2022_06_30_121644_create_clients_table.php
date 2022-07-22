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
            $table->date('date_birth');
            $table->string('cpf');
            $table->string('rg');
            $table->string('address');
            $table->integer('address_number');
            $table->string('address_complement');
            $table->string('phone1');
            $table->string('phone2');
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
