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
        Schema::create('test_lists', function (Blueprint $table) {
            $table->id();
            $table->morphs('testlistable'); // This creates 'commentable_id' and 'commentable_type'
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('status')->default(config('web.constants.status.active'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_lists');
    }
};
