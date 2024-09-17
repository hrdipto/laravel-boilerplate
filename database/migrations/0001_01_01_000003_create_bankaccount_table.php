<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bankaccount', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number');

        });

          Schema::create('usercard', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('cardnumber');

        });
     Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('item');

        });

       
    }

};
