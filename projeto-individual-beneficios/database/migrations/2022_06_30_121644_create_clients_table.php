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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',80);
            $table->date('date_birth');
            $table->string('cpf',11);
            $table->string('rg',10);
            $table->integer('id_address');
            $table->integer('address_number');
            $table->string('address_complement',10);
            $table->string('phone1',20);
            $table->string('phone2',20);
            $table->string('email',40);

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
