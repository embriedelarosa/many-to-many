<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chapter_progress_table', function (Blueprint $table) {
            $table->id();
            $table->foreignId('progress_id')->constrained('progresses')->onDelete('cascade');
            $table->foreignId('chapter_id')->constrained('chapters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chapter_progress_table');
    }
};

