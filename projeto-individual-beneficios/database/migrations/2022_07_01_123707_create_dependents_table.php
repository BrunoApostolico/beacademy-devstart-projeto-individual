<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dependents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')
            ->constrained('clients')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->timestamps();
            $table->string('name');
            $table->date('date_birth');
            $table->string('cpf');
            $table->string('relationship');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependents');
    }
};
