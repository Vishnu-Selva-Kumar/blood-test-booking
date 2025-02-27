<?php

use App\Models\Category;
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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->foreignIdFor(Category::class)->nullable();
            $table->text('image')->nullable();
            $table->double('price')->nullable();
            $table->double('special_price')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('process')->nullable();
            $table->json('faq')->nullable();
            $table->json('widgets')->nullable();
            $table->integer('status')->default(config('web.constants.status.active'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
