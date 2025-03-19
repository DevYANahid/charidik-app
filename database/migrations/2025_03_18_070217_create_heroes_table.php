<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('slider_image');
            $table->string('slider_title');
            $table->string('slider_category');
            $table->string('bottom_image1');
            $table->string('bottom_title1');
            $table->string('bottom_category1');
            $table->string('bottom_image2');
            $table->string('bottom_title2');
            $table->string('bottom_category2');
            $table->string('bottom_image3');
            $table->string('bottom_title3');
            $table->string('bottom_category3');
            $table->string('video_url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
