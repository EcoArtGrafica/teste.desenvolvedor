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
        Schema::create('home_appliances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('voltage');
            $table->bigInteger('brand_id')->unsigned();
            $table->decimal('value');
            $table->string('main_image');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_appliances');
    }
};
