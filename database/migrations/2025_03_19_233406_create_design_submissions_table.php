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
        Schema::create('design_submissions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // The name of the person submitting the form
            $table->string('design_title'); // The title of the design
            $table->text('design_description'); // The description of the design
            $table->string('image_path'); // Path to the image on the server
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design_submissions');
    }
};
