<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('serial number');
            $table->dateTime('published at');
            $table->bigInteger('author_id')->unsigned();
            // $table->string('author name');
            // $table->bigInteger('author_name')->unsigned();
            $table->timestamps();

            $table->foreign('author_id', 'authorid_foreign')->references('id')->on('authors');
            // $table->foreign('author_name', 'authoriname_foreign')->references('name')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
