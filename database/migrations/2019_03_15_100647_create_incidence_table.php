<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidence', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->integer('phone');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image');
            $table->enum('category', ['Iluminación', 'Jardinería', 'Alcantarillado', 'Basura', 'Otros']);
            $table->text('description');
            $table->string('location');
            $table->enum('state',['Recibida', 'En Gestión', 'Solucionada']);
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
        Schema::dropIfExists('incidence');
    }
}
