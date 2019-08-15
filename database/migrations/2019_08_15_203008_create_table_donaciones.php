<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDonaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_donaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donador', 100)->nullable();
            $table->integer('monto')->nullable();
            $table->unsignedBigInteger('beneficiarios_id');
            $table->foreign('beneficiarios_id')->references('id')->on('beneficiarios')->onDelete('cascade');
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
        Schema::dropIfExists('table_donaciones');
    }
}
