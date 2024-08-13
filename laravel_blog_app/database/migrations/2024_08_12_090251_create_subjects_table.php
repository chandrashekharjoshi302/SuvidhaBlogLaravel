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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subjectsID');
            $table->string('title');
            $table->text('descriptions');


            // Correctly reference the custom primary keys
            $table->foreignId('subjectcategoriesID')
                ->constrained('subjectcategories', 'subjectcategoriesID')
                ->onDelete('cascade');

            $table->foreignId('scientistsID')
                ->constrained('scientists', 'scientistsID')
                ->onDelete('cascade');
            // $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
